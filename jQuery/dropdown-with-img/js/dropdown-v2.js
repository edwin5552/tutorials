$(document).ready(function () {
	$('.dd-dropdown-toggle').on('click', function () {
		$(this).siblings('.dd-dropdown-menu').toggleClass('active');
		if ($(this).hasClass("active")) {
			$(this).removeClass("active");
		} else {
			$(this).addClass("active");
		}
	});
	$('.dd-dropdown .dd-dropdown-item').on('click', function () {
		var html = $(this).html();
		var value = $(this).find('span').data('value');
		console.log(value);
		$(this).closest('.dd-dropdown-menu').siblings('.dd-dropdown-toggle').find('.dd-dropdown-placeholder').html(html);
		$(this).closest('.dd-dropdown-menu').removeClass('active');
		$(this).closest('.dd-dropdown-menu').prev().removeClass('active');
		$(this).closest('.dd-dropdown').data('value', value);
		console.log($(this).closest('.dd-dropdown').data('value'));
	});
});