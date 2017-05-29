<?php
	// Call the PHP files that decalres global variables
	include(__DIR__. '/globals/current-env.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $root; ?>/images/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $root; ?>/images/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $root; ?>/images/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $root; ?>/images/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $root; ?>/images/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $root; ?>/images/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $root; ?>/images/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $root; ?>/images/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root; ?>/images/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo $root; ?>/images/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $root; ?>/images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $root; ?>/images/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $root; ?>/images/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo $root; ?>/images/favicons/manifest.json">
	
	<?php if ( ( $cfldTitle == 'Contact Thanks' ) || ( $cfldTitle == 'Get The Tips' ) || ( $cfldTitle == 'Get The Book' ) || ( $cfldTitle == 'Download The Guide' ) || ( $cfldTitle == 'Pricing Submitted' ) ): ?>
	<meta name="robots" content="noindex">
	<?php endif; ?>
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo $root; ?>/images/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!--[if IE]>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $root; ?>/favicon.ico">
	<![endif]-->
	
	<!-- Index Page Metadata -->
	<meta property="og:description" content="Effortlessly Attract, Grow And Engage A Long-term Investor Audience." />
	<meta property="og:locale" content="en_AU" />
	<meta property="og:locale:alternate" content="en_US" />
	<meta property="og:locale:alternate" content="en_GB" />
	<meta property="og:site_name" content="StockDigital" />	
	
	<link type="text/css" href="<?php echo $root; ?>/css/stocks-digital.css" rel="stylesheet">
	
	<script type="text/javascript" src="<?php echo $root; ?>/js/jquery.js"></script>
	<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>

	<?php if ( $cfldTitle == '' ): ?>
	<title>StocksDigital</title>
	<?php else: ?>
	<title><?php echo $cfldTitle; ?> - StocksDigital</title>
	<?php endif; ?>
</head>