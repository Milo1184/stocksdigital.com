<?php
	function captcha_check() {
		if(isset($_POST['g-recaptcha-response'])) {
          $captcha=$_POST['g-recaptcha-response'];
        }

        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }

        $secretKey = "6LczJhYUAAAAAGEPuhoddTJ7ZmJQjL-gkeNfEdVK";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        } else {
          echo '<h2>Thanks for posting comment.</h2>';
        }
	}
?>