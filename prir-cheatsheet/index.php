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
					<h1>PR/IR Firms</h1>
					<p class="heading-5">What you (and your clients) need to know about Digital Investor Engagement</p>
					<p><strong>Enhance your Digital Investor Engagement Today…</strong></p>
					<p>Download the <strong>PR IR Cheat Sheet</strong> eBook to receive the latest guidelines for Public and Investor Relations using digital platforms.</p>
					<p>This eBook covers:</p>
					<ul>
						<li>The basics in digital engagement</li>
						<li>How to take your digital engagement to the next level</li>
						<li>How to identify the right digital service provider</li>
					</ul>
					
					<p>Simply fill out the form below to download your <strong>PR IR Cheat Sheet</strong> eBook today.</p>
					
					<div class="form-message-failure">
						<p>Oops! An error occured and your message could not be sent.</p>
					</div>

					<form action="../mailer.php" id="pr-ir-guide" method="post" class="form-styler" onsubmit="return captcha_check()">
						<input type="hidden" name="dcretURL" value="pr-ir-cheatsheet">
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

						<input type="hidden" value=" For PR and IR Firms" name="title">
						<input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
						<div id="RecaptchaField1"></div>
						<button type="submit" class="button-3" value="Get the Ebook" disabled>Get the Ebook</button>
					</form>
				<!-- div.panel ENDS -->
				</div>
				
				<img src="../images/e-books/stocksdigital-pr-ir-firms-ebook.png" alt="For PR & IR Firms" title="What you (and your clients) need to know about digital investor engagement" class="ebook-cover hider">
				<div class="clear"></div>				
			</section>
		<!-- div.wrap ENDS -->
		</div>
	</main>

<img style="display:none;" src="http://stocksdigital.force.com/t/sd-pr-ir-firm-1/" width="1" height="1">
<img style="display:none;" src="http://stocksdigital.force.com/t/sd-lead-score-2/" width="1" height="1">
<?php include('../includes/footer.php'); ?>