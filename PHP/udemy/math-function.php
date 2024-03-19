<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Math Functions</title>
	<style>
		body {
			font-size: 20px;
		}
	</style>
</head>

<body>

	<h2>Array Function</h2>
	<?php

	$list = [343, 34, 323, 23, 54, 232, 453];
	echo max($list) . "<br>";
	echo min($list) . "<br>";
	print_r($list) . "<br>";

	?>


	<hr>
	<h2>String Functions</h2>
	<?php

	$string = "My first string";
	echo strlen($string) . "<br>";
	echo strtoupper($string) . "<br>";
	echo strtolower($string) . "<br>";

	?>

	<hr>
	<h2>Math Functions</h2>
	<?php

	echo rand(1, 100) . "<br>";
	echo sqrt(30) . "<br>";
	echo ceil(13.2) . "<br>";
	echo floor(30.6) . "<br>";
	echo round(30.6) . "<br>";

	?>

</body>

</html>