export default {
	init() {
	// JavaScript to be fired on all pages

	$('.js-toggle-nav').click( function (e) {
		const body = $('body');
		e.preventDefault();
		$(this).toggleClass('open');
		$(body).toggleClass('menu-open');
	})
	const blob = $('.blob');
	$(blob).addClass('blob--loaded');

	},
	finalize() {
	// JavaScript to be fired on all pages, after page specific JS is fired
	},
};
