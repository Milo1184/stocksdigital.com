<?php include('../includes/head.php'); ?>
	<?php include('../includes/header.php'); ?>
	<script type="text/javascript">
		var onloadCallback = function() {
			grecaptcha.render('RecaptchaField1', {'sitekey' : '6LczJhYUAAAAAPCMU683tszFblgljZZyjDzLTgjf', 'callback' : recaptchaCallback});
			grecaptcha.render('RecaptchaField2', {'sitekey' : '6LczJhYUAAAAAPCMU683tszFblgljZZyjDzLTgjf', 'callback' : recaptchaCallbackfooter});
		};
	</script>
	
	<main id="two-column-left">
		<div class="wrap">
			<section class="pricing">
            	<div class="panel hider">
					<h1>Why use licenced operators for digital promotion</h1>
					<p class="heading-5">Choosing the right digital service provider</p>
					<p>Using online advertising to promote your company is rapidly gaining popularity. Companies that provide this service should be licensed under an Australian Financial Services License (AFSL).</p>
					<p>Use the <strong>12 Questions to ask when determining the right digital service provider for you</strong> eBook to:</p>
					<ul>
						<li>Determine if your digital service provider adheres to ASIC Guidelines</li>
						<li>Understand the common false promises of unlicensed operators</li>
						<li>Engage investors online legally</li>
					</ul>
					
					<p>Simply fill out the form below and you can download your <strong>12 Questions To Ask When Using Digital Advertising To Attract Investors</strong> today.</p>
					
					<div class="form-message-failure">
						<p>Oops! An error occured and your message could not be sent.</p>
					</div>

					<form action="../mailer.php" id="12-questions-form" method="post" class="form-styler hider" onsubmit="return captcha_check()">
						<input type="hidden" name="dcretURL" value="licensed-operators-ebook">
						<input type="hidden" name="oid" value="00N9000000Dwp1g">
						<input type="hidden" name="lookup" value="true">

						<div class="two-columns">
							<div class="field column">
								<label for="fname">First Name<span class="required">*</span></label>
								<input type="text" id="fname" name="FirstName" class="input-text" required>
							</div>

							<div class="field column">
								<label for="lname">Last Name<span class="required">*</span></label>
								<input type="text" id="lname" name="LastName" class="input-text" required>
							</div>
						<!-- div.two-columns ENDS -->
						</div>

						<div class="field full-width">
							<label for="e-mail">Email<span class="required">*</span></label>
							<input type="email" name="Email" id="e-mail" class="input-text" required>
						</div>

						 <div class="field full-width">
							<input type="hidden" name="Status" id="Status" value="Open" class="input-text">
						</div>

						<input type="hidden" value="Why use licenced operators for digital promotion" name="title">
						<input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
						<div id="RecaptchaField1"></div>
						<button type="submit" class="button-3" value="Get the Ebook" disabled>Get the Ebook</button>
					</form>
				<!-- div.panel ENDS -->
				</div>
				
				<img src="../images/e-books/stocksdigital-12-questions.png" alt="12 Questions to ask when using digital advertising to attract investors" title="12 Questions to ask when using digital advertising to attract investors" class="ebook-cover hider">
				<div class="clear"></div>				
			</section>
		<!-- div.wrap ENDS -->
		</div>
	</main>

<img style="display:none;" src="http://stocksdigital.force.com/t/sd-lead-score-2/" width="1" height="1">
<?php include('../includes/footer.php'); ?>