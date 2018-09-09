export default function() {

	jQuery(document).ready(function($) {

		$('header').on('click', '.header__menu-toggle', function(event) {
			var header = $('header');

			event.preventDefault();
			header.find('.header__menu').toggleClass('show');
			$('.header__overlay').toggleClass('show');

		});

		$('body').on('click', '.header__overlay', function(event) {
			var header = $('header');

			event.preventDefault();
			$(this).toggleClass('show');
			header.find('.nav-primary').toggleClass('show');
		});

	});

}