
$(document).ready(function () {
	$('.menu-item-has-children').hover(
		function () {
			$(this).find('.sub-menu').addClass('active');
		},
		function () {
			$(this).find('.sub-menu').removeClass('active');
		}
	);
});