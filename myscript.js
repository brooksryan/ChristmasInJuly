$(function(){

	"use strict";

	var topoffset = 50;

	/* Autmating slide carousel indicators*/

	var slideqty = $('#featured .item').length


	var wheight = $(window).height(); /*Get height of window*/

	$('.fullheight').css('height',wheight);


	/*Activate Scrollspy*/

	$('body').scrollspy({

		target:'header .navbar',
		offset: topoffset

	});"use strict";

	var topoffset = 50;

	/* Autmating slide carousel indicators*/

	var slideqty = $('#featured .item').length


	var wheight = $(window).height(); /*Get height of window*/

	$('.fullheight').css('height',wheight);


	/*Activate Scrollspy*/

	$('body').scrollspy({

		target:'header .navbar',
		offset: topoffset

	});

	/*Use smooth scrolling navigation*/

	    $('.navbar a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') ===
            this.pathname.replace(/^\//,'') &&
            location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top-topoffset+2
                }, 500);
                return false;
            	} //target.length
        	} //click function
    	}); //smooth scrolling

	/*stores location of current page in hash variable*/

	var hash = $(this).find('li.active a').attr('href');

	if(hash !== '#featured') {
		$('header nav').addClass('inbody');
	} else {
		$('header nav').addClass('inbody');
	};

	/*add inbody class to nav when scrolling past header*/

	var hash = $(this).find('li.active a').attr('href');

	if(hash !== '#featured') {
		$('header nav').addClass('inbody');
	} else {
		$('header nav').removeClass('inbody');
	}


	$('.navbar-fixed-top').on('activate.bs.scrollspy', function (){

		var hash = $(this).find('li.active a').attr('href');

		if(hash !== '#featured') {
			$('header nav').addClass('inbody');
		} else {
			$('header nav').removeClass('inbody');
		}

	})
});