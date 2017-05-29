	<footer>
		<div class="wrap">
			<div class="three-columns">
				<div class="column">
				  <h3>Social</h3>

				  <ul class="social-icons row">
					<li class="facebook"><a href="https://www.facebook.com/stocksdigital" target="_blank">Facebook</a></li>
					<li class="twitter"><a href="https://twitter.com/stocksdigital" target="_blank">Twitter</a></li>
					<li class="linkedin"><a href="https://www.linkedin.com/company/stocks-dig" target="_blank">Linkedin</a></li>
				  </ul>
				</div>
				
				<div class="column">
					<h3>Get in Touch</h3>
					
					<p>For a free 30 minute consultation about your digital promotion strategy, please provide your details and one of our Consultants will be in contact.</p>
				</div>

				<div class="column">
					<form action="<?php echo $root; ?>/mailer.php" method="POST" id="footer-contact" class="hider form-styler">
						<input type="hidden" name="dcretURL" value="sd-contactus-thankyoupage">
						<input type="hidden" name="oid" value="00N9000000Dwp1g">
						<input type="hidden" name="lookup" value="true">
						<input type="text" id="FirstName" name="FirstName" placeholder="First Name *" class="input-text" required>
						<input type="text" id="LastName" name="LastName" placeholder="Last Name *" class="input-text" required>
						<input type="email" name="Email" id="email" placeholder="Email *" class="input-text" required>
						<input type="text" name="Phone" id="phone" placeholder="Phone *" class="input-text" required>
						<input type="hidden" name="Status" id="status" value="Open" class="input-text">
						<input type="hidden" value="Get In Touch - Home Page" name="title">
						<input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
						
						<span class="required">* Required</span>
						<div class="clear"></div>
						<div id="RecaptchaField2" style="margin: 0 auto; width: 310px;"></div>
						<button type="submit" class="button-2" value="Get a quote" disabled>Send Message</button>
					</form>
				</div>
			<!-- div.three-columns ENDS -->
			</div>
			
			<div class="footer-bottom">
				<p>&copy; 2017 StocksDigital. All rights reserved | <a href="<?php echo $root; ?>/privacy-policy/">Privacy Policy</a></p>
			<!-- div.footer-bottom ENDS -->
			</div>
		<!-- div.wrap ENDS -->
		</div>
	</footer>
	<script type="text/javascript" src="<?php echo $root; ?>/js/core.js"></script>
</body>
</html>
	