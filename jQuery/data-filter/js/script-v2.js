$('.js-filter').on('click', function () {

	$('.js-filter').removeClass('active');
	$(this).addClass('active');

	var $color = $(this).attr('data-color');

	if ($color == 'all') {
		$('.js-filterable').removeClass('d-none');
	} else {
		$('.js-filterable').addClass('d-none');
		$('.js-filterable[data-color=' + $color + ']').removeClass('d-none');
	}

});



