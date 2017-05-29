    <footer>
      <div class="container">
        <div class="row justify-content-centre row-1">
          <div class="col-md-4 social">
            <h3>Social</h3>

            <ul class="social-icons">
            <li class="facebook"><a href="https://www.facebook.com/stocksdigital" target="_blank">Facebook</a></li>
            <li class="twitter"><a href="https://twitter.com/stocksdigital" target="_blank">Twitter</a></li>
            <li class="linkedin"><a href="https://www.linkedin.com/company/stocks-dig" target="_blank">Linkedin</a></li>
            </ul>
          </div>
          
          <div class="col-md-4 get-in-touch">
            <h3>Get in Touch</h3>
            
            <p>For a free 30 minute consultation about your digital promotion strategy, please provide your details and one of our Consultants will be in contact.</p>
          </div>

          <div class="col-md-4 contact-form">
            <form action="/contact" method="POST" id="footer-contact">
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
              <input type="hidden" name="dcretURL" value="sd-contactus-thankyoupage">
              <input type="hidden" name="oid" value="00N9000000Dwp1g">
              <input type="hidden" name="lookup" value="true">
              <input type="hidden" name="Status" id="status" value="Open" class="input-text">
              <input type="hidden" value="Get In Touch - Home Page" name="title">
              <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
              
              <div class="form-group row">
                <div class="col-12">
                  <label for="FirstName" class="sr-only"></label>
                  <input type="text" id="FirstName" name="FirstName" placeholder="First Name *" class="form-control form-control-lg" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12">
                  <label for="LastName" class="sr-only"></label>
                  <input type="text" id="LastName" name="LastName" placeholder="Last Name *" class="form-control form-control-lg" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12">
                  <label for="email" class="sr-only"></label>
                  <input type="email" name="Email" id="email" placeholder="Email *" class="form-control form-control-lg" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12">
                  <label for="phone" class="sr-only"></label>
                  <input type="text" name="Phone" id="phone" placeholder="Phone *" class="form-control form-control-lg" required>
                  <small class="form-text">* Required</small>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12">
                  <div id="RecaptchaField2" style="width: 100%;"></div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col d-flex justify-content-end">
                  <button type="submit" class="btn btn-lg btn-outline-primary" value="Get a quote" disabled>Get in touch</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
        <div class="row row-2">
          <div class="col">
            <p class="copyright">&copy; <?php echo date('Y'); ?> StocksDigital. All rights reserved | <a href="/privacy-policy/">Privacy Policy</a></p>
          </div>
        </div>
      </div>
    </footer>    

    <script src="/js/jquery.min.js"></script>
    <script src="/js/script.min.js"></script>
  </body>
</html>
