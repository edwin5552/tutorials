$(document).ready(function () {
	$('.dropdown-toggle').on('click', function () {
		$(this).siblings('.dropdown-menu').toggleClass('active');
		if ($(this).hasClass("active")) {
			$(this).removeClass("active");
		} else {
			$(this).addClass("active");
		}
	});
	$('.dropdown .dropdown-item').on('click', function () {
		var html = $(this).html();
		var value = $(this).find('.dropdown-item-value').data('value');
		console.log(value);
		$(this).closest('.dropdown-menu').siblings('.dropdown-toggle').find('.dropdown-toggle-block').html(html);
		$(this).closest('.dropdown-menu').removeClass('active');
		$(this).closest('.dropdown-menu').prev().removeClass('active');
		$(this).closest('.dropdown').data('value', value);
		console.log($(this).closest('.dropdown').data('value'));
	});
});