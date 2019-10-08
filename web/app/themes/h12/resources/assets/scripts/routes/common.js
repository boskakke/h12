export default {
	init() {
	// JavaScript to be fired on all pages

	$('.js-toggle-nav').click( function (e) {
		const body = $('body');
		e.preventDefault();
		$('.hamburger').toggleClass('open');
		$(body).toggleClass('menu-open');
	})
	},
	finalize() {
	// JavaScript to be fired on all pages, after page specific JS is fired
	},
};
