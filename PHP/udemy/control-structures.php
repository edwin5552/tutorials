<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Control Structures</title>
	<style>
		body {
			font-size: 20px;
		}
	</style>
</head>

<body>

	<h2>Foreach Loop</h2>
	<?php 
		$numbers = array(100, 200, 300, 400);

		foreach ($numbers as $number) {
			echo $number . '<br>';
		}

	?>

	<hr>

	<h2>For Loop</h2>
	<?php 
		for ($counter = 0; $counter < 10; $counter++ ) {
			echo $counter . '<br>';
		}
	?>

	<hr>

	<h2>While Loop</h2>
	<?php 
		$counter = 0;
		while($counter < 10) {
			
			echo "Hello Developer" . "<br>";
			$counter ++;

		}
	?>

	<hr>

	<h2>Switch Statements</h2>

	<hr>

	<h2>Comparison and Logical Operators</h2>

	<hr>

	<h2>If Statements</h2>
	<?php
		if (3 > 10) {
			echo "three is less than ten";
		} elseif (4 < 5) {
			echo "of course four is less than five";
		} else {
			echo "it is not";
		}
	?>

</body>

</html>