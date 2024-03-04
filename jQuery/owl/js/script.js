$(document).ready(function () {
	$('#owlOne').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		items: 1,
		nav: true,
		dots: true,
		navText: ['<img src="img/owl-prev.svg" alt="prev">', '<img src="img/owl-next.svg" alt="next">'],
		// autoplay:true,
		// autoplayTimeout:2000,
		// autoplayHoverPause:true,
	});
});