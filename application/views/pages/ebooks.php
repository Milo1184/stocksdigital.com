<main class="content-page">
  <div class="container">
    <div class="row">
      <div class="col-8 content">

      <?php if($ebook === '9-expert-tips'){ ?>

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

      <?php } ?>

      <?php if($ebook === 'prir-cheatsheet'){ ?>

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
        

      <?php } ?>

      <?php if($ebook === '12-questions'){ ?>

        <h1>Why use licensed operators for digital promotion</h1>
        <p class="heading-5">Choosing the right digital service provider</p>
        <p>Using online advertising to promote your company is rapidly gaining popularity. Companies that provide this service should be licensed under an Australian Financial Services License (AFSL).</p>
        <p>Use the <strong>12 Questions to ask when determining the right digital service provider for you</strong> eBook to:</p>
        <ul>
          <li>Determine if your digital service provider adheres to ASIC Guidelines</li>
          <li>Understand the common false promises of unlicensed operators</li>
          <li>Engage investors online legally</li>
        </ul>
        
        <p>Simply fill out the form below and you can download your <strong>12 Questions To Ask When Using Digital Advertising To Attract Investors</strong> today.</p>

      <?php } ?>

      <?php if(isset($errMsg)){ ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $errMsg; ?>
        </div>
      <?php } ?>


      <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
          <input type="hidden" name="dcretURL" value="<?php echo $dcretURL; ?>">
          <input type="hidden" name="oid" value="00N9000000Dwp1g">
          <input type="hidden" name="lookup" value="true">
          <input type="hidden" name="title" value="<?php echo $title; ?>">
          <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
          <input type="hidden" name="Status" id="Status" value="Open">

          <div class="form-group row">
            <div class="col-xs-12 col-md-6">
              <label for="fname">First Name<span class="required">*</span></label>
              <input type="text" id="fname" name="FirstName" class="form-control form-control-lg" required>
            </div>

            <div class="col-xs-12 col-md-6">
              <label for="lname">Last Name<span class="required">*</span></label>
              <input type="text" id="lname" name="LastName" class="form-control form-control-lg" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-12">
              <label for="e-mail">Email<span class="required">*</span></label>
              <input type="email" name="Email" id="e-mail" class="form-control form-control-lg" required>
            </div>
          </div>
          
          <div id="RecaptchaField1"></div>
          <button type="submit" class="btn btn-primary btn-lg submit-button" disabled>Get the Ebook</button>
        </form>

      </div>
      <div class="col-xs-12 col-md-4">
        <img src="/images/resources/<?php echo $ebookImage; ?>" alt="<?php echo $ebookImageAlt; ?>" title="<?php echo $ebookImageTitle; ?>">
      </div>
    </div>
  </div>
</main>

<?php if($ebook === 'prir-cheatsheet'){?>
  <img style="display:none;" src="http://stocksdigital.force.com/t/sd-pr-ir-firm-1/" width="1" height="1" alt="salesforce">
<?php } ?>
<img style="display:none;" src="http://stocksdigital.force.com/t/sd-lead-score-2/" width="1" height="1" alt="salesforce">
