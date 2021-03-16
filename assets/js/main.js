(function( root, $, undefined ) {
	"use strict";

	$(function () {
		
		var 
		menuOverlay = $('.menuOverlay'),
		hamburgerIcon = $('.hamburger'),
		header = $('header'),
		closeButton = $('.closeModalButton'),
		closeSearchButton = $('.closeSearchButton'),
		searchBar = $('.search_container'),
		modalOverlayDiv = '<div class="modal_overlay"></div>',
		toggle_menu = hamburgerIcon.add(closeButton);
		
		function addOverlay() {
			if ( $('.show').length ) {
				$(modalOverlayDiv).hide().prependTo('body').fadeIn();
			}
		}
		
		function removeOverlayButtons() {
			$('html').removeClass('fixed');
			menuOverlay.removeClass('show');
			$('.modal_overlay').fadeOut('normal', function() {
				$(this).remove();
			});
		}
		
		function removeOverlay() {
			$('body').on('click', '.modal_overlay', function() {
				$('html').removeClass('fixed');
				$(this).siblings(searchBar,menuOverlay).removeClass('show');
				$(this).fadeOut('normal', function() {
					$(this).remove();
				});
			});
		}
		
		function toggleMenu() {
			header.toggleClass('is-active');
			$('html').addClass('fixed');
			menuOverlay.toggleClass('show');
			addOverlay();
		}
		
		// SMOOTH SCROLL AFTER PAGE LOAD
		if ( window.location.hash ) scroll(0,0);
		setTimeout( function() { scroll(0,0); }, 1);
		
		// SUB MENU TOGGLE BUTTON
		$('.menuInner li.menu-item-has-children').prepend('<span class="sub-toggle"><i class="fa fa-angle-down"></i></span>');
		$('.sub-toggle').click(function(e) {
			e.preventDefault();
			$(this).siblings('.sub-menu').slideToggle();
			$(this).children().toggleClass('is-active');
		});
		
		// SEARCH BAR
		function searchBarFunction() {
			$('.search a').click(function(e) {
				e.preventDefault();
				searchBar.toggleClass('show');
				$('html').addClass('fixed');
				addOverlay();
			});
			
			closeSearchButton.click(function() {
				searchBar.toggleClass('show');
				removeOverlayButtons();
			});
		}
		
		closeButton.click(function() {
			removeOverlayButtons();
		});
		
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
		
		// ESCAPE KEY CLICK TO ESCAPE
		$(document).keyup(function(e) {
			if (e.key === "Escape") { // escape key maps to keycode `27`
				menuOverlay.removeClass('show');
				searchBar.removeClass('show');
				$('html').removeClass('fixed');
				$('.modal_overlay').fadeOut('normal', function() {
					$(this).remove();
				});
			}
		});
		
		// ADD / REMOVE CLASS ON SCROLL
		$.fn.visible = function (partial) {
			var $t = $(this),
				$w = $(window),
				viewTop = $w.scrollTop(),
				viewBottom = viewTop + $w.height(),
				_top = $t.offset().top,
				_bottom = _top + $t.height(),
				compareTop = partial === true ? _bottom: _top,
				compareBottom = partial === true ? _top: _bottom;
			return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
		};
		
		$(function() {
			
			removeOverlay();
			
			searchBarFunction();
			
			heroHeight();
			$(window).resize(function() {
				heroHeight();
			});
			
			// SMOOTH SCROLL AFTER PAGE LOAD
			$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').on('click', function() {
		        //e.preventDefault();
		        $('html, body').animate({
		            scrollTop: $($(this).attr('href')).offset().top + 'px'
		        }, 1000);
		    });
		
		    if(window.location.hash) {
		
		        // smooth scroll to the anchor id
		        $('html, body').animate({
		            scrollTop: $(window.location.hash).offset().top + 'px'
		        }, 1000);
		    }
			
			var $document = $(document);
			//viewportHeight = $('.splash').height() / 2;
			$document.scroll(function() {
				if ( $document.scrollTop() >= 50 ) {
					$('body').addClass('scroll');
					$('header').addClass('shrink');
				} else {
				    $('body').removeClass('scroll');
					$('header').removeClass('shrink');
				}
				//inViewport();
				$(".cta").each(function(i, el) {
				    var el = $(el);
				    if (el.visible(true)) {
						el.addClass("expand"); 
				    } else {
						el.removeClass("expand");
				    }
				});
			});
			
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
				$('.home header, .arrow_down').addClass('visible');
				
				$(".carousel").slick({
					autoplaySpeed: 3000,
					dots: false,
					arrows: false,
					autoplay: true,
					fade: true,
					speed: 2000,
					pauseOnHover: false,
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
			
		});
		
	});

} ( this, jQuery ));