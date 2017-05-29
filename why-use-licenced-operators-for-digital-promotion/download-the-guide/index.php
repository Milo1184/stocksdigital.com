<?php include('../../includes/head.php'); ?>
	<?php include('../../includes/header.php'); ?>
	<script type="text/javascript">
		var onloadCallback = function() {
			grecaptcha.render('RecaptchaField1', {'sitekey' : '6LczJhYUAAAAAPCMU683tszFblgljZZyjDzLTgjf', 'callback' : recaptchaCallback});
			grecaptcha.render('RecaptchaField2', {'sitekey' : '6LczJhYUAAAAAPCMU683tszFblgljZZyjDzLTgjf', 'callback' : recaptchaCallbackfooter});
		};
	</script>
	
	<main id="two-column-left">
		<div class="wrap">
			<section class="sf-thanks">
				<div class="panel">
					<h1>Get your eBook!</h1>
					<p>Before you engage in any digital advertising, ask yourself these 12 important questions.</p>
					<a class="button-3" href="../../pdfs/12-Questions-to-Ask-When-Using-Digital-Advertising-to-Attract-Investors.pdf" target="_blank">Click here to download</a>
				</div>

				<img src="../../images/e-books/stocksdigital-12-questions.png" alt="12 Questions to ask when using digital advertising to attract investors" title="12 Questions to ask when using digital advertising to attract investors" class="ebook-cover">
				<div class="clear"></div>

				<hr>
				<div class="further-resources three-columns">
					<div class="column">
						<p class="heading-4">Further Resources</p>
						<p>Maximise your Digital Investor Engagement with these additional resources.</p>
						<p>StocksDigital’s eBooks are designed to demonstrate the benefits of successfully implementing digital advertising into investor communications strategies.</p>
					</div>

					<div class="column">
						<img src="../../images/e-books/stocksdigital-9-expert-tips-ebook-cover.png" alt="9 Expert Tips to engage Investors online" title="9 Expert Tips to engage Investors online">
						<a class="button-1" href="http://stocksdigital.force.com/t/sd-9-expert-tips-direct/" target="_blank">Get the tips</a>
					</div>

					<div class="column">
						<img src="../../images/e-books/stocksdigital-pr-ir-firms-ebook.png" alt="For PR & IR Firms" title="What you (and your clients) need to know about digital investor engagement">
						<a class="button-1" href="http://stocksdigital.force.com/t/digital-investor-engagement-direct/" target="_blank">Get the guide</a>
					</div>
				<!-- div.further-resources ENDS -->
				</div>
				<div class="clear"></div>
				<hr>

				<div class="form-message-failure">
					<p>Oops! An error occured and your message could not be sent.</p>
				</div>
			
				<p class="heading-4 hider">Let's Chat</p>
				<form action="../../mailer.php" method="POST" id="contact-form" class="hider form-styler" onsubmit="return captcha_check()">
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
						<label for="comp">Company<span class="required">*</span></label>
						<input type="text" name="Company" id="comp" class="input-text" required>
					</div>

					 <div class="field full-width">
						<input type="hidden" name="Status" id="Status" value="Open" class="input-text">
					</div>

					<input type="hidden" value="Lets Chat" name="title">
					<input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
					<div id="RecaptchaField1"></div>
					
					<button type="submit" class="button-3" value="Get a quote" disabled>Send Message</button>
				</form>
			</section>
		<!-- div.wrap ENDS -->
		</div>
	</main>

<img style="display:none;" src="http://stocksdigital.force.com/t/sd-lead-score-1/" width="1" height="1">
<?php include('../../includes/footer.php'); ?>
