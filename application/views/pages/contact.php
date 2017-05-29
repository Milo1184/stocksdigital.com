<main class="content-page">
  <div class="container">
    <div class="row">
      <div class="col-12 content">
        

        <?php if($formSubmitted === 0){?>

          <h1>Let's Chat</h1>

          <p>To speak to one of our consultants, fill in your details below and we'll get in touch.</p>

          <?php if(isset($errMsg)){ ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $errMsg; ?>
          </div>
          <?php } ?>

          <form action="/contact" method="post">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            <input type="hidden" name="dcretURL" value="sd-contactus-thankyoupage">
            <input type="hidden" name="oid" value="00N9000000Dwp1g">
            <input type="hidden" name="lookup" value="true">
            <input type="hidden" value="Lets Chat" name="title">

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
                <button type="submit" class="btn btn-primary btn-lg submit-button" disabled>Get in touch</button>
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


