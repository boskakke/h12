export default {
	init() {
	// JavaScript to be fired on all pages
	const body = $('body');
	$('.js-toggle-nav').click( function (e) {	
		e.preventDefault();
		$(this).toggleClass('open');
		$(body).toggleClass('menu-open');
	})
	const blob = $('.blob');
	$(blob).addClass('blob--loaded');

	$(body).addClass('loaded');

	const waves = document.querySelector('.site-footer__waves');
	const bird = document.querySelector('.site-footer__birdie');

	let observer = new IntersectionObserver((entries) => { 
		entries.forEach(entry => {
			if(entry.intersectionRatio!=1 ){
				bird.classList.remove('PIIPPIP')
			}
			else {
				bird.classList.add('PIIPPIP')
			}
		});
	}, {threshold: 1});
	observer.observe(waves);


	},
	finalize() {
	// JavaScript to be fired on all pages, after page specific JS is fired
	},
};


