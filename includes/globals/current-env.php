<?php
	// This file decalres global variables required to determine URLs and apply page specific styles
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	$newstring = substr($actual_link, -4); 
	if ($newstring == '.php') {
		$rd = substr($actual_link, 0, -4);
		header('Location: ' . $rd, 301);
	}

	//$root = "http://$_SERVER[HTTP_HOST]";
	$root = 'http://localhost/stocksdigital.com';

	// Get the current folder to makr menu items as complete
	$dir = $_SERVER['SCRIPT_NAME']; // Get Full path to file
	$folder = parse_url($dir, PHP_URL_PATH); // Parse the value
	$arr = explode("/",$folder); // Explode full path into fragmented folders
	$ct = count($arr); // Get number of items in the array
	//$cfld = $arr[$ct-2]; // Isolate the required folder name - Staging & Live
	$cfld = $arr[$ct-3]; // Isolate the required folder name - Localhost
	
	$cfldTitle = strtolower(str_replace('-', ' ',$cfld));

	$cfldTitle = ucwords($cfldTitle);
?>