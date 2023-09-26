(function ($) {
	$.fn.addHasVideoClass = function () {
		// Parcours de tous les éléments <figure> dans la sélection jQuery
		this.each(function () {
		  var $figure = $(this);
		  if ($figure.find('video').length > 0) {
			// Si l'élément <figure> contient une balise <video>, ajoutez la classe .has-video
			$figure.addClass('has-video');
		  }
		});
		return this; // Pour permettre le chaînage des méthodes jQuery
	  };
	$(document).ready(function () {
		var slider = $('.slider-soutient');
		$('.slider-soutient figure').addHasVideoClass();
		slider.slick({
			infinite: true,
			dots: true,
			arrows: false,
			autoplay: true,
			autoplaySpeed: 6500,
			cssEase: 'ease-in-out',
			appendDots: $('.slick-slider-soutient-dots'),
			appendArrows: $('.slick-slider-soutient-nav'),
		});

		// Gestionnaire d'événement pour le clic sur une diapositive
		slider.on('click', '.slick-slide', function () {
			var $video = $(this).find('video')[0];
			if ($video) {
				$video.currentTime = 0; // Remettez la vidéo au début
				$(this).find('video').toggleClass('play'); // Basculez la classe 'play'
				$(this).find('figure').toggleClass('play'); // Basculez la classe 'play'

				
				if ($(this).find('video').hasClass('play')) {
					// Si la classe 'play' est présente, activez le son
					$video.muted = false;
				} else {
					// Sinon, désactivez le son
					$video.muted = true;
				}

				if ($video.paused) {
					$video.play();
				} else {
					$video.pause();
				}
			}
		});

		// Gestionnaire d'événement pour le changement de diapositive
		slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
			// Désactivez le son de la vidéo de la diapositive précédente
			var $currentSlide = slick.$slides.eq(currentSlide);
			var $video = $currentSlide.find('video')[0];
			if ($video) {
				$video.pause();
				$currentSlide.find('video').removeClass('play'); // Supprimez la classe 'play' de la vidéo précédente
				$currentSlide.find('figure').removeClass('play'); // Basculez la classe 'play'

			}
		});
	});

})(jQuery);
