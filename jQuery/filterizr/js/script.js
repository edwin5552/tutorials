$(document).ready(function () {

	$('.filterizr-filter li .btn').click(function () {
		$('.filterizr-filter li .btn').removeClass('active');
		$(this).addClass('active');
	});
	$('.filterizr-sorting li .btn').click(function () {
		$('.filterizr-sorting li .btn').removeClass('active');
		$(this).addClass('active');
	});

	var filterizd = $('.filtr-container').filterizr();


});