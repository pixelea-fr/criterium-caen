(function ($) {
	$(document).ready(function ($) {

	});
	$(window).load(function () {
		// Récupérez la date PHP
		var datePHP = date;
		// console.log(date);
		// Créez une nouvelle date JavaScript
		function parseDate(dateStr) {
			// Tableau des mois en français
			var mois = {
				janvier: 0, février: 1, mars: 2, avril: 3, mai: 4, juin: 5,
				juillet: 6, août: 7, septembre: 8, octobre: 9, novembre: 10, décembre: 11
			};

			// Séparez la chaîne en parties : jour, mois, année, heure, minute
			var parts = dateStr.split(' ');
			var jour = parseInt(parts[0]);
			var moisIndex = mois[parts[1].toLowerCase()];
			var annee = parseInt(parts[2]);
			var heureMinute = parts[3].split(':');
			var heure = parseInt(heureMinute[0]);
			var minute = parseInt(heureMinute[1]);

			// Créez une date JavaScript avec les valeurs extraites
			var jsDate = new Date(annee, moisIndex, jour, heure, minute);

			return jsDate;
		}
		var jsDate = parseDate(datePHP);
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
					span.innerHTML = digits.map(function (digit) {
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