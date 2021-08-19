jQuery(document).ready(function($) {
// -------------------------- //

$('#nav-button').click(function() {
	$('.flexbox-nav-wrapper').addClass('active');
	$('body').addClass('no-scroll');
});

$('#nav-button-close').click(function() {
	$('.flexbox-nav-wrapper').removeClass('active');
	$('body').removeClass('no-scroll');
});

function toggleAlert() {
	$('.alert-wrapper').toggleClass('active');
	$('body').removeClass('no-scroll');
}

$('#alertDismiss').click(function() {
	toggleAlert();
});

$(document).keyup(function(e) {
	if (e.keyCode === 27) {
		if ($('.alert-wrapper').hasClass('active')) {
			toggleAlert();
		}
	}
});

if ($('.alert-wrapper').hasClass('active')) {
	setTimeout(function(){
		$('.alert-wrapper').removeClass('active');
		$('body').removeClass('no-scroll');
	}, 8000);
}

// Owl carousel

$('.owl-carousel-welcome').owlCarousel({
    items: 1,
    dots: true,
    nav: false,
    autoplay: true,
    loop: true,
    autoplaySpeed: 3500,
    autoplayTimeout: 7500,
    mouseDrag: false,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'
});

// Navigation

$(window).scroll(function() {
    let scroll = $(window).scrollTop();
    let windowWidth = $(window).width();

    if (windowWidth > 560 && scroll >= 200) {
        $(".section-header").addClass("fixed");
        $(".body-wrapper").css("padding-top", "105px");

    } else if (windowWidth < 560 && scroll >= 200) {
        $(".section-header").addClass("fixed");
        $(".body-wrapper").css("padding-top", "81px");

    } else {
        $(".section-header").removeClass("fixed");
        $(".body-wrapper").css("padding-top", "0");
    }

});

// Fixed button

  $(window).scroll(function () {
    const top = $(this).scrollTop();
    const bottom =
      document.body.scrollHeight - window.innerHeight - window.scrollY;
    if (top <= 500 || bottom < 500) {
      $("#fixed-left-button").css('opacity','0');
    } else {
      $("#fixed-left-button").css('opacity','1');
    }
  });

// -------------------------- //
});