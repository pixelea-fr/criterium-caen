(function($){
	$(document).ready(function($) {
		
	});
	$(window).load(function() {
		$('.slider').slick({
			infinite: true,
			dots: true,
			autoplay: false,
			speed: 1500,
			fade: true,
			cssEase: 'linear',
			appendArrows: $('.slick-slider-nav'),
			appendDots: $('.slick-slider-dots'),
			prevArrow: "<span class='arrow prev'><</span>",
			nextArrow: "<span class='arrow next'>></span>",
		});

	});
})(jQuery);