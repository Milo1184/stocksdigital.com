<?php include('includes/head.php'); ?>
	<?php include('includes/header.php'); ?>
	<script type="text/javascript">
		var onloadCallback = function() {
			grecaptcha.render('RecaptchaField2', {'sitekey' : '6LczJhYUAAAAAPCMU683tszFblgljZZyjDzLTgjf', 'callback' : recaptchaCallbackfooter});
		};
	</script>
	
	<main id="two-column-left">
		<div class="wrap">
			<section id="404">
				<h1>Oops!</h1>
				<p>You blew up the Internet.</p>
				<p>Your server seems to have an internal error. You can always start over from the <a href="<?php echo $root; ?>/">home page</a>.</p>
			</section>
		</div>
	</main>
<?php include('includes/footer.php'); ?>