(function($){
	$(document).ready(function($) {
		
	});
	$(window).load(function() {
		$('.slider').slick({
			infinite: true,
			dots: true,
			autoplay: true,
			autoplaySpeed: 3500,
			fade: true,
			cssEase: 'linear',
			appendArrows: $('.slick-slider-nav'),
			appendDots: $('.slick-slider-dots'),
			prevArrow: "<span class='arrow prev'><</span>",
			nextArrow: "<span class='arrow next'>></span>",
		});

	});
})(jQuery);