<?php
	if(isset($_POST['g-recaptcha-response'])) {
	  $captcha=$_POST['g-recaptcha-response'];
	}

	$secretKey = "6LczJhYUAAAAAGEPuhoddTJ7ZmJQjL-gkeNfEdVK";
	$ip = $_SERVER['REMOTE_ADDR'];
	$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
	$responseKeys = json_decode($response,true);
	if(intval($responseKeys["success"]) !== 1) {
		header('Location: '.$_POST['url']);
		exit();
	} 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $_POST["Email"];
		$fname = $_POST["FirstName"];
		$lname = $_POST["LastName"];
		$title = $_POST["title"];
		$to = 'info@stocksdigital.com';
		
		if ( isset($_POST["services"]) ) {
			foreach($_POST["services"] as $key => $value) {
				$services[$key] = $value;
			}
		}
		
		if ( isset($_POST["Company"]) ) {
			$company = $_POST["Company"];
		}
		
		if ( isset($_POST["Message_Field__c"]) ) {
			$message = $_POST["Message_Field__c"];
		}
		
		if ( isset($_POST["Phone"]) ) {
			$phone = $_POST["Phone"];
		}
		
		if ( !filter_var($to, FILTER_VALIDATE_EMAIL) ) {
			// Set a 400 (bad request) response code and exit.
			http_response_code(400);
			echo "Oops! There was a problem with your submission. Please complete the form and try again.";
			exit;
		}

		// Set the email subject.
		$subject = $title.' @StocksDigital';

		// Build the email content.
		$email_content = "Hi,\n\n$fname $lname has filled out the form: $title";
		$email_content .= "\n\nThe details are as follows:\n\nFirst Name: $fname\nLast Name: $lname\nEmail: $email";
		
		if ( isset($_POST["Phone"]) ) {
			$email_content .= "\nPhone: $phone";
		}

		if ( isset($_POST["Company"]) ) {
			$email_content .= "\nCompany: $company";
		}
		
		if ( isset($_POST["Message_Field__c"]) ) {
			$email_content .= "\nMessage: $message";
		}
		
		if ( isset($_POST["services"]) ) {
			$email_content .= "\nThe services requested are: ";
			foreach( $services as $service ) {
				$email_content .= $service.", ";
			}
		}
		
		$email_content .= "\n\nRegards,\nStocks Digital";

    // Build the email headers.
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers = "From: SD - $title <info@stocksdigital.com>";
		
     // Send the email.
     if (mail($to, $subject, $email_content, $headers)) {
         // Set a 200 (okay) response code.
         //http_response_code(200);
         //echo "Thank You! Your message has been sent.";
         add_to_salesforce();
     } else {
         // Set a 500 (internal server error) response code.
         http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
        exit();
     }
		
   } else {
       // Not a POST request, set a 403 (forbidden) response code.
       http_response_code(403);
       echo "There was a problem with your submission, please try again.";
       exit();
  }

  function add_to_salesforce()
  {

    $url = 'http://stocksdigital.force.com/dc__W2LDirect';
	  
    $dataArray = array(
      'dcretURL' => $_POST['dcretURL'], 
      'oid' => $_POST['oid'], 
      'lookup' => 'true', 
      'FirstName-u' => $_POST['FirstName'], 
      'LastName-u' => $_POST['LastName'], 
      'Email-u' => $_POST['Email'], 
      'Status' => 'Open', 
      'SD_Webform_Submitted__c-u' => $_SERVER['HTTP_REFERER']
    );
	  
	if ( isset($_POST["Company"]) ) {
		$dataArray['Company-u'] = $_POST["Company"];
	} else {
		$dataArray['Company-b'] = 'NULL';
	}
	  
	if ( isset($_POST["Phone"]) ) {
		$dataArray['Phone-u'] = $_POST['Phone'];
	}
	  
	if ( isset($_POST["Message_Field__c"]) ) {
		$dataArray['Message_Field__c-a'] = $_POST['Message_Field__c'];
	}
	  
	if ( isset($_POST["services"]) ) {
		foreach($_POST["services"] as $key => $value) {
			$key = str_replace("'", '', $key);
			$dataArray[$key] = $value;
		}
	}
	
  	$data = http_build_query($dataArray);
	
  	$options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => $data
        )
    );
    $context  = stream_context_create($options);

    $result = file_get_contents($url, false, $context);

	if($result === FALSE) {
		http_response_code(403);
        echo "There was a problem with your submission, please try again.";
        //exit();
	}

	  //var_dump($result);
    echo $result;

  }

?>