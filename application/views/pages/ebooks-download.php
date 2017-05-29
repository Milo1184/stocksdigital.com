<main class="content-page">
  <div class="container">
    <div class="row">
      <div class="col-8 content">

      <?php if($ebook === '9-expert-tips'){ ?>

        <h1>Unlock Your Digital Investor Strategy Today</h1>
        <p>Transform your online investor communications with our <strong>9 Expert Tips to Engage Investors Online</strong>.</p>
        <p>Download your eBook below and start reaching a wider audience.</p>
        <a href="/pdfs/9-Expert-Tips-To-Engage-Investors-Online.pdf" target="_blank" class="btn btn-primary btn-lg">Click here to download</a>

      <?php } ?>

      <?php if($ebook === 'prir-cheatsheet'){ ?>

        <h1>Get your eBook!</h1>
        <p>In this digital age in which we live in, online engagement is at the forefront of any investor communications strategy.</p>
        <a href="/pdfs/Digital-Investor-Engagement-Cheat-Sheet.pdf" target="_blank" class="btn btn-primary btn-lg">Click here to download</a>
        

      <?php } ?>

      <?php if($ebook === '12-questions'){ ?>

        <h1>Get your eBook!</h1>
        <p>Before you engage in any digital advertising, ask yourself these 12 important questions.</p>
        <a href="/pdfs/12-Questions-to-Ask-When-Using-Digital-Advertising-to-Attract-Investors.pdf" target="_blank" class="btn btn-primary btn-lg">Click here to download</a>

      <?php } ?>

      <?php if(isset($errMsg)){ ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $errMsg; ?>
        </div>
      <?php } ?>

      </div>
      <div class="col-xs-12 col-md-4">
        <img src="/images/resources/<?php echo $ebookImage; ?>" alt="<?php echo $ebookImageAlt; ?>" title="<?php echo $ebookImageTitle; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <hr>
          <div class="row">
            <div class="col-xs-12 col-md-4">
              <h4>Further Resources</h4>
              <p>Maximise your Digital Investor Engagement with these additional resources.</p>
              <p>StocksDigital’s eBooks are designed to demonstrate the benefits of successfully implementing digital advertising into investor communications strategies.</p>
            </div>
            <div class="col-xs-12 col-md-4">

              <?php if($ebook === '9-expert-tips'){ ?>

                <img src="/images/resources/stocksdigital-pr-ir-firms-ebook.png" alt="For PR & IR Firms" title="What you (and your clients) need to know about digital investor engagement">
                <a class="btn btn-primary btn-lg btn-center" href="http://stocksdigital.force.com/t/digital-investor-engagement-direct/" target="_blank">Get the Guide</a>

              <?php } ?>

              <?php if($ebook === 'prir-cheatsheet' || $ebook === '12-questions'){ ?>

                <img src="/images/resources/stocksdigital-9-expert-tips-ebook-cover.png" alt="9 Expert Tips to engage Investors online" title="9 Expert Tips to engage Investors online">
                <a class="btn btn-primary btn-lg btn-center" href="http://stocksdigital.force.com/t/sd-9-expert-tips-direct/" target="_blank">Get the tips</a>

              <?php } ?>

            </div>
            <div class="col-xs-12 col-md-4">

              <?php if($ebook === '9-expert-tips' || $ebook === 'prir-cheatsheet'){ ?>

                <img src="../../images/resources/stocksdigital-12-questions.png" alt="12 Questions to ask when using digital advertising to attract investors" title="12 Questions to ask when using digital advertising to attract investors">
                <a class="btn btn-primary btn-lg btn-center" href="http://stocksdigital.force.com/t/sd-w-12-question-to-ask-direct/" target="_blank">Get the ebook</a>

              <?php } ?>

              <?php if($ebook === '12-questions'){ ?>

                <img src="/images/resources/stocksdigital-pr-ir-firms-ebook.png" alt="For PR & IR Firms" title="What you (and your clients) need to know about digital investor engagement">
                <a class="btn btn-primary btn-lg btn-center" href="http://stocksdigital.force.com/t/digital-investor-engagement-direct/" target="_blank">Get the Guide</a>

              <?php } ?>

            </div>
          </div>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
      <h4>Let's Chat</h4>
        <form action="/contact" method="post">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
          <input type="hidden" name="dcretURL" value="sd-contactus-thankyoupage">
          <input type="hidden" name="oid" value="00N9000000Dwp1g">
          <input type="hidden" name="lookup" value="true">
          <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
          <input type="hidden" value="Lets Chat" name="title">

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

          <div class="form-group row">
            <div class="col-12">
              <label for="company">Company<span class="required">*</span></label>
              <input type="text" name="Company" id="company" class="form-control form-control-lg" required>
            </div>
          </div>
          
          <div id="RecaptchaField1"></div>
          <button type="submit" class="btn btn-primary btn-lg" disabled>Get in touch</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php if($ebook === 'prir-cheatsheet'){?>
  <img style="display:none;" src="http://stocksdigital.force.com/t/sd-pr-ir-firm-1/" width="1" height="1" alt="salesforce">
<?php } ?>
<img style="display:none;" src="http://stocksdigital.force.com/t/sd-lead-score-1/" width="1" height="1" alt="salesforce">
