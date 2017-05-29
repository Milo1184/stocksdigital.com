<main class="content-page">
  <div class="container">
    <div class="row">
      <div class="col-12 content">

        <?php if($formSubmitted === 0){?>

          <h1>Pricing</h1>

          <p>StocksDigital provides a plethora of services to assist both small and large cap companies with their digital investor engagement strategies.  We provide a range of pricing packages, all built on each individual company’s requirements.</p>

          <p>To discuss a tailored quote for your company, please contact one of our experienced consultants by completing the below form.  One of our consultants will then be in touch to assist in developing a suitable strategy for your company’s needs.</p>

          <?php if(isset($errMsg)){ ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $errMsg; ?>
          </div>
          <?php } ?>

          <form action="/pricing" method="post">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            <input type="hidden" name="dcretURL" value="sd-pricing-request-submitted">
            <input type="hidden" name="oid" value="00N9000000Dwp1g">
            <input type="hidden" name="lookup" value="true">
            <input type="hidden" value="Pricing" name="title">

            <div class="row">
              <div class="col-xs-12 col-md-4">
                <label class="form-check-label">
                  <input type="checkbox" name="services['SD_Research_Coverage__c-u']" class="form-check-input" value="Research Coverage" id="rc">
                  Research Coverage
                </label>
              </div>
              <div class="col-xs-12 col-md-4">
                <label class="form-check-label">
                  <input type="checkbox" name="services['SD_News_Services__c-u']" class="form-check-input" value="News Services" id="ns">
                  News Services
                </label>
              </div>
              <div class="col-xs-12 col-md-4">
                <label class="form-check-label">
                  <input type="checkbox" name="services['SD_Marketing_Bursts__c-u']" class="form-check-input" value="Marketing Bursts" id="mb">
                  Marketing Bursts
                </label>
              </div>
              <div class="col-xs-12 col-md-4">
                <label class="form-check-label">
                  <input type="checkbox" name="services['SD_Company_Website_Content_Management__c-u']" class="form-check-input" value="Company Website Content and Management" id="cwc">
                  Company Website Content &amp; Management
                </label>
              </div>
              <div class="col-xs-12 col-md-4">
                <label class="form-check-label">
                  <input type="checkbox" name="services['SD_Investor_Mailing_List_Database__c-u']" class="form-check-input" value="Investor Mailing List/Database" id="iml">
                  Investor Mailing List/Database
                </label>
              </div>
              <div class="col-xs-12 col-md-4">
                <label class="form-check-label">
                  <input type="checkbox" name="services['SD_Social_Media__c-u']" class="form-check-input" value="Social Media" id="sm">
                  Social Media
                </label>
              </div>
              <div class="col-xs-12 col-md-4">
                <label class="form-check-label">
                  <input type="checkbox" name="services['SD_ICAT_Digital_Advertising__c-u']" class="form-check-input" value="ICAT Digital Advertising" id="icat">
                  ICAT Digital Advertising
                </label>
              </div>
              <div class="col-xs-12 col-md-4">
                <label class="form-check-label">
                  <input type="checkbox" name="services['SD_Reporting_Metrics__c-u']" class="form-check-input" value="Reporting and Metrics" id="rm">
                  Reporting &amp; Metrics
                </label>
              </div>
              <div class="col-xs-12 col-md-4">
                <label class="form-check-label">
                  <input type="checkbox" name="services['SD_Website_Interest__c-u']" class="form-check-input" value="Get a Website" id="wb">
                  Get a Website
                </label>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-xs-12 col-md-6">
                <label for="fname">First Name<span class="required">*</span></label>
                <input type="text" id="fname" name="FirstName" class="form-control form-control-lg" required>
              </div>
              <div class="form-group col-xs-12 col-md-6">
                <label for="lname">Last Name<span class="required">*</span></label>
                <input type="text" id="lname" name="LastName" class="form-control form-control-lg" required>
              </div>
              <div class="form-group col-12">
                <label for="e-mail">Email<span class="required">*</span></label>
                <input type="email" id="e-mail" name="Email" class="form-control form-control-lg" required>
              </div>
              <div class="form-group col-12">
                <label for="mobile">Phone<span class="required">*</span></label>
                <input type="text" name="Phone" id="mobile" class="form-control form-control-lg" required>
              </div>
              <div class="form-group col-12">
                <label for="comp">Company<span class="required">*</span></label>
                <input type="text" name="Company" id="comp" class="form-control form-control-lg" required>
              </div>
              <div class="form-group col-12">
                <label for="mess">Message</label>
                <textarea name="Message_Field__c" id="mess" class="form-control form-control-lg" rows=5></textarea>
              </div>
              <div class="form-group col-12">
                  <div id="RecaptchaField1"></div>
                </div>
              <div class="form-group col-12">
                <button type="submit" class="btn btn-primary btn-lg submit-button" disabled>Get a Quote</button>
              </div>
            </div>
          </form>

          <img style="display:none;" src="http://stocksdigital.force.com/t/sd-lead-score-3/" width="1" height="1" alt="salesforce">

          <?php }else{ ?>


          <h1>Thanks for contacting us!</h1>
          <p>We’ll be in touch with you shortly.</p>

        <?php } ?>
      </div>
    </div>
  </div>
</main>


