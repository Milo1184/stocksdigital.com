<?php include('includes/head.php'); ?>
	<?php include('includes/header.php'); ?>
	<script type="text/javascript">
		var onloadCallback = function() {
			grecaptcha.render('RecaptchaField2', {'sitekey' : '6LczJhYUAAAAAPCMU683tszFblgljZZyjDzLTgjf', 'callback' : recaptchaCallbackfooter});
		};
	</script>
	
	<main id="two-column-left">
		<div class="wrap">
			<section id="custom-404">
				<h1>Oops!</h1>
				<p>You blew up the Internet.</p>
				<p>The page you are looking for is no longer here, or never existed in the first place (bummer). You can start over from the <a href="<?php echo $root; ?>/">home page</a>.</p>
			</section>
		</div>
	</main>
<?php include('includes/footer.php'); ?>