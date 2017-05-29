// need to replace the logo-animation class in order to get the animation to work on hover

$('.logo-holder').on('mouseenter', function(){
  $(this).find('.logo').removeClass('logo-animation').width();
  $(this).find('.logo').addClass('logo-animation');
});
