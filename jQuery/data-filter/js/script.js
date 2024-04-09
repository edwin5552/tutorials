$('.js-filter').on('click', function () {

	var $color = $(this).attr('data-color');

	if ($color == 'all') {
		$('.js-filterable').removeClass('is-hidden');
	} else {
		$('.js-filterable').addClass('is-hidden');
		$('.js-filterable[data-color=' + $color + ']').removeClass('is-hidden');
	}

});