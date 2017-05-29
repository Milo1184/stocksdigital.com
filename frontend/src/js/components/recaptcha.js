var onloadCallback = function() {
  if($('#RecaptchaField1').length > 0){
    grecaptcha.render('RecaptchaField1', {'sitekey' : '6LczJhYUAAAAAPCMU683tszFblgljZZyjDzLTgjf', 'callback' : recaptchaCallback});
  }

  grecaptcha.render('RecaptchaField2', {'sitekey' : '6LczJhYUAAAAAPCMU683tszFblgljZZyjDzLTgjf', 'callback' : recaptchaCallbackfooter});

};

var recaptchaCallback = function(){
  $('.submit-button').removeAttr('disabled');
};

var recaptchaCallbackfooter = function(){
  $('footer .contact-form button').removeAttr('disabled');
};
