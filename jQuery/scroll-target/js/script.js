$(document).ready(function () {
	$('.btn').click(function () {
		$('html, body').animate({
			scrollTop: $('#sectionThree').offset().top
		}, 1000); // 1000 milliseconds = 1 second
	});
});