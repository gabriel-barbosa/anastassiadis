(function( root, $, undefined ) {
	"use strict";

	$(function () {
		$(".slider").slick({
		speed: 800,
		autoplay: true,
		fade: true,
		dots: true,
		prevArrow: $('.prev'),
    nextArrow: $('.next'),
		customPaging : function(slider, i) {
		i++;
		var thumb = $(slider.$slides[i]).data();
		return '<a class="dot">'+i+'</a>';
		},
		});

		$('.thumbnails-button .button').click(function() {
			$('.post-header').addClass('scroll');
			$('.caption').addClass('hidden');
			$('.slider-nav').addClass('visible');
		});

		$('.slider-nav .single-thumb').click(function() {
			$('.slider-nav').removeClass('visible');
			$('.caption').removeClass('hidden');
			$('.post-header').removeClass('scroll');
			$('.post-header').scrollTop(0);
		});


		if($(".post-slider").length > 0) {
			var $carousel = $(".post-slider").flickity({
				wrapAround: true,
				dots: true,
				cellSelector: 'img',
				imagesLoaded: true,
				percentPosition: false,
			});
			var $carouselNav = $('.slider-nav');
			var $carouselNavCells = $carouselNav.find('.single-thumb');

			$carouselNav.on( 'click', '.single-thumb', function( event ) {
				var index = $( event.currentTarget ).index();
				$carousel.flickity( 'select', index );
			});

			var flkty = $carousel.data('flickity');
			var navTop  = $carouselNav.position().top;
			var navCellHeight = $carouselNavCells.height();
			var navHeight = $carouselNav.height();

			$carousel.on( 'select.flickity', function() {
				// set selected nav cell
				$carouselNav.find('.is-nav-selected').removeClass('is-nav-selected');
				var $selected = $carouselNavCells.eq( flkty.selectedIndex )
					.addClass('is-nav-selected');
				// scroll nav
				var scrollY = $selected.position().top +
					$carouselNav.scrollTop() - ( navHeight + navCellHeight ) / 2;
				$carouselNav.animate({
					scrollTop: scrollY
				});
			});

			var $caption = $('.caption');

			$carousel.on( 'select.flickity', function() {
				if(flkty.selectedElement.alt) {
					// set image caption using img's alt
					$caption.text(flkty.selectedElement.alt);
				}
				else {
					$caption.html("&nbsp;");
				}
			});
		}

		if($('.about-menu').length > 0) {
			$('.about-menu a').click(function(){
				$('html, body').animate({
						scrollTop: $( $(this).attr('href') ).offset().top - $(".header").outerHeight()
				}, 500);
				return false;
			});
		}
	});

} ( this, jQuery ));