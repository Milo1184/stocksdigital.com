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
			<section class="contact">
                <h1>Let's Chat</h1>

                <p>To speak to one of our consultants, fill in your details below and we will get touch.</p>

                <div class="form-message-failure">
					<p>Oops! An error occured and your message could not be sent.</p>
				</div>
                
				<form action="../mailer.php" method="POST" id="contact-form" class="hider form-styler" onSubmit="return captcha_check()">
                    <input type="hidden" name="dcretURL" value="sd-contactus-thankyoupage">
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
                        <label for="mobile">Phone<span class="required">*</span></label>
                        <input type="text" name="Phone" id="mobile" class="input-text" required>
                    </div>

                    <div class="field full-width">
                        <label for="comp">Company<span class="required">*</span></label>
                        <input type="text" name="Company" id="comp" class="input-text" required>
                    </div>

                    <div class="field full-width">
                        <label for="message">Message</label>
                        <textarea name="Message_Field__c" id="message" class="input-text"></textarea>
                    </div>

                     <div class="field full-width">
                        <input type="hidden" name="Status" id="Status" value="Open" class="input-text">
                    </div>

                   	<input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
                    <input type="hidden" value="Lets Chat" name="title">
                    <div id="RecaptchaField1"></div>
                    <button type="submit" class="button-3" value="Get a quote" disabled>Send Message</button>
                </form>
			</section>
		<!-- div.wrap ENDS -->
		</div>
	</main>

<img style="display:none;" src="http://stocksdigital.force.com/t/sd-lead-score-2/" width="1" height="1">
<?php include('../includes/footer.php'); ?>
