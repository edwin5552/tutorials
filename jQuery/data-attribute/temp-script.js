<script>
	$(document).ready(function () {
		// Function to toggle visibility of target div based on data attribute
		//  $('.toggleButton').click(function(){
		//      var target = $(this).data('target');
		//      $('#' + target).toggle();
		//  });


		// $('.toggleButton').click(function () {
		// 	var target = $(this).data('target');
		// 	$('[id^="targetDiv"]').not('#' + target).hide();
		// 	$('#' + target).show();
		// });



		// Show the first div by default
		$('#targetDiv1').show();

	// Function to toggle visibility of target div based on data attribute
	$('.toggleButton').click(function () {
				var target = $(this).data('target');
	// Hide all divs except the target div
	$('[id^="targetDiv"]').not('#' + target).hide();
	// Show the target div
	$('#' + target).show();
			});


		});
</script>
