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
                <h1>Pricing</h1>

                <p>StocksDigital provides a plethora of services to assist both small and large cap companies with their digital investor engagement strategies.  We provide a range of pricing packages, all built on each individual company’s requirements.</p>

                <p>To discuss a tailored quote for your company, please contact one of our experienced consultants by completing the below form.  One of our consultants will then be in touch to assist in developing a suitable strategy for your company’s needs.</p>
                
                <div class="form-message-failure">
					<p>Oops! An error occured and your message could not be sent.</p>
				</div>
                                
                <form action="../mailer.php" method="post" id="pricing-form" class="hider form-styler">
                	<p class="heading-5">Our Services</p>
                	
                	<div class="three-columns">
                		<div class="field column checkbox-container">
							<input type="checkbox" name="services['SD_Research_Coverage__c-u']" class="checkbox" value="Research Coverage" id="rc">
							<label for="rc">Research Coverage</label>
						<!-- div.field ENDS -->
						</div>
						
                		<div class="field column checkbox-container">
							<input type="checkbox" name="services['SD_News_Services__c-u']" class="checkbox" value="News Services" id="ns">
							<label for="ns">News Services</label>
						<!-- div.field ENDS -->
						</div>

                		<div class="field column checkbox-container">
							<input type="checkbox" name="services['SD_Marketing_Bursts__c-u']" class="checkbox" value="Marketing Bursts" id="mb">
							<label for="mb">Marketing Bursts</label>
						<!-- div.field ENDS -->
						</div>

                		<div class="field column checkbox-container">
							<input type="checkbox" name="services['SD_Company_Website_Content_Management__c-u']" class="checkbox" value="Company Website Content and Management" id="cwc">
							<label for="cwc">Company Website Content &amp; Management</label>
						<!-- div.field ENDS -->
						</div>
						
                		<div class="field column checkbox-container">
							<input type="checkbox" name="services['SD_Investor_Mailing_List_Database__c-u']" class="checkbox" value="Investor Mailing List/Database" id="iml">
							<label for="iml">Investor Mailing List/Database</label>
						<!-- div.field ENDS -->
						</div>

                		<div class="field column checkbox-container">
							<input type="checkbox" name="services['SD_Social_Media__c-u']" class="checkbox" value="Social Media" id="sm">
							<label for="sm">Social Media</label>
						<!-- div.field ENDS -->
						</div>

                		<div class="field column checkbox-container">
							<input type="checkbox" name="services['SD_ICAT_Digital_Advertising__c-u']" class="checkbox" value="ICAT Digital Advertising" id="icat">
							<label for="icat">ICAT Digital Advertising</label>
						<!-- div.field ENDS -->
						</div>
               		
                		<div class="field column checkbox-container">
							<input type="checkbox" name="services['SD_Reporting_Metrics__c-u']" class="checkbox" value="Reporting and Metrics" id="rm">
							<label for="rm">Reporting &amp; Metrics</label>
						<!-- div.field ENDS -->
						</div>
						
                		<div class="field column checkbox-container">
							<input type="checkbox" name="services['SD_Website_Interest__c-u']" class="checkbox" value="Get a Website" id="wb">
							<label for="wb">Get a Website</label>
						<!-- div.field ENDS -->
						</div>
					<!-- div.three-columns ENDS -->
					</div>
					
                    <input type="hidden" name="dcretURL" value="sd-pricing-request-submitted">
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
                        <input type="email" id="e-mail" name="Email" class="input-text" required>
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
                        <label for="mess">Message</label>
                        <textarea name="Message_Field__c" id="mess" class="input-text"></textarea>
                    </div>

                     <div class="field full-width">
                        <input type="hidden" name="Status" value="Open" class="input-text">
                    </div>
                    
                    <input type="hidden" value="Pricing" name="title">
					<input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
	                <div id="RecaptchaField1"></div>
                    
                    <button type="submit" class="button-3" value="Get a quote" disabled>Get a quote</button>
				</form>
			</section>
		<!-- div.wrap ENDS -->
		</div>
	</main>

<img style="display:none;" src="http://stocksdigital.force.com/t/sd-lead-score-3/" width="1" height="1">
<?php include('../includes/footer.php'); ?>