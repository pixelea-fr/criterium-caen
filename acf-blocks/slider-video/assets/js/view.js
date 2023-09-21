(function($){
	$(document).ready(function($) {
		$('.slider-soutient').slick({
			infinite: true,
			dots: true,
			arrows: false,
			autoplay: true,
			autoplaySpeed: 6500,
			cssEase: 'ease-in-out',
			appendDots: $('.slick-slider-soutient-dots'),
			// appendArrows: $('.slick-slider-soutient-nav'),
			// prevArrow: "<span class='arrow prev'><</span>",
			// nextArrow: "<span class='arrow next'>></span>",
		});
		$(".video").mouseover(function() {
            $(this).prop("muted", false);
			$(this).prop("volume", 1);
        });

        $(".video").mouseout(function() {
            $(this).prop("muted", true);
			$(this).prop("volume", 0);

        });
	});
	$(window).load(function() {
	});
})(jQuery);