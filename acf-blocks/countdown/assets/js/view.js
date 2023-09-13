(function ($) {
	$(document).ready(function ($) {

	});
	$(window).load(function () {
		// Récupérez la date PHP
		var datePHP = date;
		// Créez une nouvelle date JavaScript
		var jsDate = new Date(datePHP);
		// Fonction pour mettre à jour le compte à rebours
		function updateCountdown() {
			var currentDate = new Date();
			var timeDifference = jsDate - currentDate;
		
			if (timeDifference > 0) {
				var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
				var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
		
				// Fonction pour mettre à jour les span avec les chiffres individuels
				function updateSpan(id, value) {
					var span = document.getElementById(id);
					var digits = String(value).padStart(2, '0').split('');
					span.innerHTML = digits.map(function(digit) {
						return '<span>' + digit + '</span>';
					}).join('');
				}
		
				// Mettez à jour les span avec les chiffres individuels
				updateSpan('days', days);
				updateSpan('hours', hours);
				updateSpan('minutes', minutes);
			} else {
				$('#countdown').html('Le compte à rebours est terminé.');
			}
		}
		
		// Met à jour le compte à rebours toutes les minutes
		setInterval(updateCountdown, 60000);
		
		// Appel initial
		updateCountdown();
	});
})(jQuery);