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
					<h1>9 Expert Tips To Engage Investors Online</h1>
					<p class="heading-5">Improve Your Digital Investor Relations Today</p>
					<p>Download this FREE eBook to receive the latest advice on digital communications from Australia’s leading online investor communications specialist.</p>
					<p>This eBook will teach you:</p>
					<ul>
						<li>How to Transform Your Digital Strategy to Reach More Investors</li>
						<li>Detail the Latest Tools For Achieving Continual Investor Engagement</li>
						<li>How to Utilise Digital Advertising to Increase Your Company’s Presence</li>
					</ul>
					<p>Simply fill out the form below and you can download your 9 Expert Tips To Engage Investors Online immediately.</p>
					
					<div class="form-message-failure">
						<p>Oops! An error occured and your message could not be sent.</p>
					</div>
					
					<form action="../mailer.php" id="9-expert-tips-form" method="post" class="form-styler hider" onSubmit="return captcha_check()">
						<input type="hidden" name="dcretURL" value="9-expert-tips-ebook">
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

						<input type="hidden" value="9 Expert Tips To Engage Investors Online" name="title">
						<input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
	                	<div id="RecaptchaField1"></div>
						<button type="submit" class="button-3" value="Get the Ebook" disabled>Get the Ebook</button>
					</form>
				<!-- div.panel ENDS -->
				</div>
				
				<img src="../images/e-books/stocksdigital-9-expert-tips-ebook-cover.png" alt="9 Expert Tips to engage Investors online" title="9 Expert Tips to engage Investors online" class="ebook-cover">
				<div class="clear"></div>
			</section>
		<!-- div.wrap ENDS -->
		</div>
	</main>

<img style="display:none;" src="http://stocksdigital.force.com/t/sd-lead-score-2/" width="1" height="1">
<?php include('../includes/footer.php'); ?>