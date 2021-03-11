(function( root, $, undefined ) {
	"use strict";

	$(function () {
		
		var 
		menuOverlay = $('.menuOverlay'),
		hamburgerIcon = $('.hamburger'),
		header = $('header');
		function toggleMenu() {
			$('body').toggleClass('menuOpen');
			
			hamburgerIcon.toggleClass('is-active');
			
			header.toggleClass('is-active');
			
			menuOverlay.slideToggle();
		}
		
		// MOBILE MENU
		hamburgerIcon.click(function() {
			toggleMenu();
		});
		
		// HERO HEIGHT
		function heroHeight() {
			var browserHeight = $(window).height(),
			    splashTitleHeight = $('.fixed-tagline').outerHeight();
			$('.splash').height(browserHeight);
			$('.carousel').height(browserHeight - splashTitleHeight);
			$('.arrow_down').css({
				bottom: splashTitleHeight + 20
			});
		}
		
		// HIDE/SHOW HEADER ON SCROLL
		var lastScrollTop = 0;
		var delta = 5;
	    $(window).on('scroll', function() {
	        var st = $(this).scrollTop();
	        if ( st < lastScrollTop )  {
	            $('header').addClass('up').removeClass('down');
	        }
	        else if( st > lastScrollTop && st > delta ) {
	            $('header').addClass('down').removeClass('up');
	        }
	        lastScrollTop = st;
	    });
		
		// SMOOTH SCROLL TO ANCHORS
		$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function() {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target: $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					//setTimeout(function(){	
					$('html,body').animate({
						scrollTop: target.offset().top
					},
					1000);
					return false;
				}
			}
		});
		
		$(function() {
			
			heroHeight();
			$(window).resize(function() {
				heroHeight();
			});
			
			/*
			$(window).scroll(function(){
				$(".original").css({
					"transform": "translateY(" + ($(window).scrollTop()) + "px" + ")",
					"margin-left":($(window).scrollLeft()) + "px"
				});
				$(".header-transition > .inner_container").css({
					"top":($(window).scrollTop()) + "px",
					"margin-left":($(window).scrollLeft()) + "px"
				});
			});
			*/
			
			/*
			var $document = $(document),
			viewportHeight = $('.splash').height() / 2;
			$document.scroll(function() {
				if ( $document.scrollTop() >= viewportHeight ) {
					$('body').addClass('scroll');
					//$('.ghost').addClass('reveal');
					$('.header-transition > .inner_container').addClass('transition');
					$('.ghost').addClass('switch');
				} else {
				    //$('.ghost').removeClass('reveal');
					$('.header-transition > .inner_container').removeClass('transition');
					$('body').removeClass('scroll');
					$('.ghost').removeClass('switch');
				} 
				if ( $document.scrollTop() >= viewportHeight + 80) {
					$('.header-transition > .inner_container').addClass('relative_positioning');
					$('.intro_container').addClass('relative_positioning');
				} else {
				    $('.header-transition > .inner_container').removeClass('relative_positioning');
					$('.intro_container').removeClass('relative_positioning');
				}
				if ( $document.scrollTop() >= 100 ) {
					$('header').addClass('shrink');
				} else {
					$('header').removeClass('shrink');
				}
			});
			*/
			
			var $document = $(document);
			//viewportHeight = $('.splash').height() / 2;
			$document.scroll(function() {
				if ( $document.scrollTop() >= 50 ) {
					$('body').addClass('scroll');
					//$('.ghost').addClass('reveal');
					//$('.header-transition > .inner_container').addClass('transition');
					//$('.ghost').addClass('switch');
					//$('.header-transition > .inner_container').addClass('relative_positioning');
					//$('.intro_container').addClass('relative_positioning');
					$('header').addClass('shrink');
				} else {
				    //$('.ghost').removeClass('reveal');
					//$('.header-transition > .inner_container').removeClass('transition');
					$('body').removeClass('scroll');
					//$('.ghost').removeClass('switch');
					//$('.header-transition > .inner_container').removeClass('relative_positioning');
					//$('.intro_container').removeClass('relative_positioning');
					$('header').removeClass('shrink');
				}
				inViewport();
			});
			
			$(window).resize(function(){
				inViewport();
			});
			
			 function inViewport(){
				 $('.cta').each(function(){
					 var divPos = $(this).offset().top,
				 		 divHeight = $(this).outerHeight() * 2,
			             topOfWindow = $(window).scrollTop();
					 
					 if ( divPos < topOfWindow + divHeight ) {
						 $(this).addClass('expand');
					 } else {
					 	$(this).removeClass('expand');
					 }
				 });
			 }
			
			// ANIMATE ON SCROLL
			AOS.init();
			
			$('.fixed-tagline').addClass('aos-animate');
			
			setTimeout(function() {
				$('.splash_title').removeClass('aos-animate');
			}, 2500);
			
			setTimeout(function() {
				//$('.fixed-tagline').addClass('move_right');
				//$('.move_right').addClass('aos-animate');
			}, 5000);
			
			// SLICK CAROUSEL
			setTimeout(function() {
				
				$('.static_img, .blur_overlay').addClass('fade_out');
				$('.ghost').addClass('white-text');
				$('header, .arrow_down').addClass('visible');
				
				$(".carousel").slick({
					autoplaySpeed: 3000,
					dots: false,
					arrows: false,
					autoplay: true,
					fade: true,
					speed: 2000,
					pauseOnHover: false,
					//adaptiveHeight: true,
					//appendDots: $('.slick-dot-anchor'),
					//customPaging : function(carousel, i) {
					//var thumb = $(carousel.$slides[i]).data();
					//return '<a class="deeper-dive-carousel-nav">'+(i+1)+'</a>';
					//},
				});
			}, 1500);
			
			$(".work-carousel").slick({
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: false,
				appendArrows: $('.append-arrows'),
				responsive: [
					{
						breakpoint: 768,
						settings: {
					        slidesToShow: 2,
							slidesToScroll: 2
						}
				    },
					{
						breakpoint: 480,
						settings: {
					        slidesToShow: 1,
							slidesToScroll: 1
						}
				    }
				]
			});
			
			/*
			// KEN BURNS
			var currentSlide = 0;
			$('.carousel_hero').on('afterChange', function(event, slick, newSlide) {
				var items = $('.carousel_hero .slick-slide');
				if(currentSlide != newSlide) {
				    currentSlide = newSlide;
				    items.removeClass('animated');
				    setTimeout(function(){
						items.addClass('animated');
				    });
				}
			});
			
			$('.deeper-dive-nav').slick({ // slick nav
			   asNavFor: '.carousel',
			   focusOnSelect: true,
			   arrows: false
			 });
			 */
			
		});
		
	});

} ( this, jQuery ));