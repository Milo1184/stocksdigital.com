<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

    $data = array();
    $data['bodyClass'] = 'home';

    $this->load->model('client_model');
    $data['clientlogos'] = $this->client_model->get_client_logos();

		$this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);
    $this->load->view('pages/home', $data);
    $this->load->view('layout/footer', $data);
	}

  public function privacy()
  {

    $data = array();
    $data['pageTitle'] = "Privacy Policy";

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);
    $this->load->view('pages/privacy', $data);
    $this->load->view('layout/footer', $data);
  }

  public function pricing()
  {

    $data = array();
    $data['pageTitle'] = "Pricing";
    $view = 'pages/pricing';
    $data['formSubmitted'] = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $response = $this->mailer($_POST);

      if($response['error'] === 0){
        $salesforce_response = $this->add_to_salesforce($_POST);

        if($salesforce_response['error'] === 0){
          $data['formSubmitted'] = 1;
          $data['result'] = $salesforce_response['result'];
        }else{
          $data['errMsg'] = $response['errMsg'];
        }

      }else{
        $data['errMsg'] = $response['errMsg'];
      }
    }

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);
    $this->load->view($view, $data);
    $this->load->view('layout/footer', $data);
  }

  public function contact()
  {

    $data = array();
    $data['pageTitle'] = "Contact";
    $view = 'pages/contact';
    $data['formSubmitted'] = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $response = $this->mailer($_POST);

      if($response['error'] === 0){
        $salesforce_response = $this->add_to_salesforce($_POST);

        if($salesforce_response['error'] === 0){
          $data['formSubmitted'] = 1;
        }else{
          $data['errMsg'] = $response['errMsg'];
        }

      }else{
        $data['errMsg'] = $response['errMsg'];
      }
    }

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);
    $this->load->view($view, $data);
    $this->load->view('layout/footer', $data);
  }


  public function nine_expert_tips_ebook()
  {

    $data = array();
    $data['pageTitle'] = "9 Expert Tips Ebook";
    $view = 'pages/ebooks';
    $data['bodyClass'] = "ebooks";
    $data['ebook'] = "9-expert-tips";
    $data['ebookImage'] = "stocksdigital-9-expert-tips-ebook-cover.png";
    $data['ebookImageAlt'] = "9 Expert Tips to engage Investors online";
    $data['ebookImageTitle'] = "9 Expert Tips to engage Investors online";
    $data['dcretURL'] = "9-expert-tips-ebook";
    $data['title'] = "9 Expert Tips To Engage Investors Online";
    $data['formSubmitted'] = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $response = $this->mailer($_POST);

      if($response['error'] === 0){
        $salesforce_response = $this->add_to_salesforce($_POST);

        if($salesforce_response['error'] === 0){
          $data['formSubmitted'] = 1;
          $data['pageTitle'] = "Get The Tips";
          $view = 'pages/ebooks-download';
        }else{
          $data['errMsg'] = $response['errMsg'];
        }

      }else{
        $data['errMsg'] = $response['errMsg'];
      }
    }

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);
    $this->load->view($view, $data);
    $this->load->view('layout/footer', $data);
  }

  public function prir_cheatsheet()
  {

    $data = array();
    $data['pageTitle'] = "Prir Cheatsheet";
    $view = 'pages/ebooks';
    $data['bodyClass'] = "ebooks";
    $data['ebook'] = "prir-cheatsheet";
    $data['ebookImage'] = "stocksdigital-pr-ir-firms-ebook.png";
    $data['ebookImageAlt'] = "For PR & IR Firms";
    $data['ebookImageTitle'] = "What you (and your clients) need to know about digital investor engagement";
    $data['dcretURL'] = "pr-ir-cheatsheet";
    $data['title'] = "For PR and IR Firms";
    $data['formSubmitted'] = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $response = $this->mailer($_POST);

      if($response['error'] === 0){
        $salesforce_response = $this->add_to_salesforce($_POST);

        if($salesforce_response['error'] === 0){
          $data['formSubmitted'] = 1;
          $data['pageTitle'] = "Get The Book";
          $view = 'pages/ebooks-download';
        }else{
          $data['errMsg'] = $response['errMsg'];
        }

      }else{
        $data['errMsg'] = $response['errMsg'];
      }
    }

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);
    $this->load->view($view, $data);
    $this->load->view('layout/footer', $data);
  }

  public function why_use_licensed_operators_for_digital_promotion()
  {

    $data = array();
    $data['pageTitle'] = "Why Use Licensed Operators For Digital Promotion";
    $view = 'pages/ebooks';
    $data['bodyClass'] = "ebooks";
    $data['ebook'] = "12-questions";
    $data['ebookImage'] = "stocksdigital-12-questions.png";
    $data['ebookImageAlt'] = "12 Questions to ask when using digital advertising to attract investors";
    $data['ebookImageTitle'] = "12 Questions to ask when using digital advertising to attract investors";
    $data['dcretURL'] = "licensed-operators-ebook";
    $data['title'] = "Why use licenced operators for digital promotion";
    $data['formSubmitted'] = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $response = $this->mailer($_POST);

      if($response['error'] === 0){
        $salesforce_response = $this->add_to_salesforce($_POST);

        if($salesforce_response['error'] === 0){
          $data['formSubmitted'] = 1;
          $data['pageTitle'] = "Download The Guide";
          $view = 'pages/ebooks-download';
        }else{
          $data['errMsg'] = $response['errMsg'];
        }

      }else{
        $data['errMsg'] = $response['errMsg'];
      }
    }

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);
    $this->load->view($view, $data);
    $this->load->view('layout/footer', $data);
  }



  public function mailer()
  {

    if (!$_SERVER["REQUEST_METHOD"] == "POST") {
      exit('no direct access');
    }

    $return = array();
    $return['error'] = 1;

    if(isset($_POST['g-recaptcha-response'])) {
      $captcha=$_POST['g-recaptcha-response'];
    }

    $secretKey = "6LczJhYUAAAAAGEPuhoddTJ7ZmJQjL-gkeNfEdVK";
    $ip = $_SERVER['REMOTE_ADDR'];
    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
    $responseKeys = json_decode($response,true);

    if(!array_key_exists("success", $responseKeys)){
      $return['errMsg'] = "Invalid Captcha response";
      return $return;
    }

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
      $return['errMsg'] = "Oops! There was a problem with your submission. Please complete the form and try again.";
      return $return;
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
       $return['error'] = 0;
       return $return;
    } else {
      $return['errMsg'] = "Oops! Something went wrong and we couldn't send your message.";
      return $return;
    }
  
  }

  public function add_to_salesforce()
  {

    if (!$_SERVER["REQUEST_METHOD"] == "POST") {
      exit('no direct access');
    }

    $return = array();
    $return['error'] = 1;

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
      $return['errMsg'] = "There was a problem with your submission, please try again.";
      return $return;
    }else{
      $return['error'] = 0;

      //echo json_encode($result);
      $redirectPos = strpos($result, "window.location.href");

      $redirect = substr($result, $redirectPos+23);
      $redirectEnd = strpos($redirect, ";");
      $redirect = substr($redirect, 0, $redirectEnd-1);
      
      $redirectResponse = file_get_contents($redirect);

      $return['result'] = $result;
      return $return;
    }
  }

  public function custom_404()
  {

    $data = array();
    $data['bodyClass'] = "custom-404";
    $data['pageTitle'] = "Page Not Found";

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);
    $this->load->view('pages/custom-404', $data);
    $this->load->view('layout/footer', $data);
  }

}
