$('.nav-toggle, .home-page .services-closer').click(function() {
  $('.main-menu').toggleClass('open');
  
  return false;
});

$('.sub-menu-toggle').click(function() {
  $(this).parent().parent().find('ul').slideToggle('fast');

  if($(this).text() === '+') {
    $(this).text('-');
  } else {
    $(this).text('+');
  }

  return false;
});
