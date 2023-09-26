(function ($) {
	$(document).ready(function ($) {
		var slider = $('.slider-soutient');
		var currentVideo = null;
		slider.slick({
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
		// Add an event handler for the 'afterChange' event of the slider
		slider.on('afterChange', function (event, slick, currentSlide) {
			// Mettre en pause la vidéo de la diapositive précédente
			var prevSlide = currentSlide - 1;
			if (prevSlide >= 0) {
				var prevVideo = $(slick.$slides.get(prevSlide)).find(".video").get(0);
				if (prevVideo) {
					prevVideo.pause();
				}
			}

			// Jouer la vidéo de la diapositive actuelle
			var currentSlideVideo = $(slick.$slides.get(currentSlide)).find(".video").get(0);
			if (currentSlideVideo) {
				currentSlideVideo.muted= true;
				currentSlideVideo.play();
				currentVideo = currentSlideVideo; // Mettre à jour la vidéo en cours de lecture
			}
		});
		slider.on('click', '.video', function () {
			var clickedVideo = $(this).get(0);
		
			if (currentVideo) {
				if (currentVideo !== clickedVideo) {
					currentVideo.muted = true; // Couper le son de la vidéo précédente si ce n'est pas la même vidéo
				}
		
				if (currentVideo === clickedVideo) {
					// Si la vidéo cliquée est la même que la vidéo en cours de lecture, basculez le son
					currentVideo.muted = !currentVideo.muted;
				}
			} else {
				// Si currentVideo est null, cela signifie que c'est la première vidéo,
				// activez le son de la vidéo cliquée
				clickedVideo.muted = false;
			}
		
			currentVideo = clickedVideo; // Mettre à jour la vidéo en cours de lecture
		});
	});
})(jQuery);