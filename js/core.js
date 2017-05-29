/*
	JavaScript Document for Stocks Digital v1.0.1
	URI: http://stocksdigital.com/
	Author: Aakash Bhatia <http://thebrauxelcode.com/ >
	Company: Stocks Digital <http://stocksdigital.com/>
*/

function recaptchaCallback() {
	$('main .button-3').removeAttr('disabled');
}

function recaptchaCallbackfooter() {
	$('footer .button-2').removeAttr('disabled');
}

function myAjax (recognise) {
	"use strict";
	
	// Construct the ID to target the form specifically
	recognise = '#'+recognise;

	// Serialize the form data.
	var formData = $(recognise).serialize();

	// Submit the form using AJAX.
	$.ajax({
		type: 'POST',
		url: $(recognise).attr('action'),
		data: formData
	})
	.fail(function(data) {
		// Set the message text.
		if (data.responseText !== '') {
			$('.form-message-failure').text(data.responseText);
			$('.hider').fadeOut('fast');
			$('.form-message-failure').fadeIn('fast');
		} else {
			$('.hider').fadeOut('fast');
			$('.form-message-failure').fadeIn('fast');
		}
	});
}

$(document).ready(function() {
	"use strict";
	
	$('.nav-toggle, .home-page .services-closer').click(function() {
		$('#main-menu').toggleClass('open');
		
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
	
	// Smooth Scroll
	$('a[href*="#"]:not([href="#"])').click(function() {
	  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		if (target.length) {
		  $('html, body').animate({
			scrollTop: target.offset().top
		  }, 1000);
		  return false;
		}
	  }
	});
});
