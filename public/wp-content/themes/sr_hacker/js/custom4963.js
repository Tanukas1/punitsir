$(function(){
	
	$(window).scroll(function(){

		if ($(window).scrollTop() >= 50) {

			$('.site-header').addClass('fixed');

		}

		else {

			$('.site-header').removeClass('fixed');

		}

	});

	

	$('.menu-toggle').click(function(){

		$('.main-nav').addClass('open');

	});

	$('.close-menu').click(function(){

		$('.main-nav').removeClass('open');

	});
	
	
	$('.owl-testimonials').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		dots:false,		navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		// autoplay:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});
	$('.owl-product').owlCarousel({
		loop:true,
		margin:0,
		center: true,
		items:1,
		nav:true,
		dots:false,
		stagePadding: 300,
		navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		// autoplay:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});
	$("document").ready(function($){
		var nav = $('#site-navigation');

		$(window).scroll(function () {
			if ($(this).scrollTop() > 125) {
				nav.addClass("f-nav");
			} else {
				nav.removeClass("f-nav");
			}
		});
	});
	$(function() {
		$('.product-image a').nivoLightbox();
	});
	
	
	new WOW().init();
});