<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Functions</title>
	<style>
		body {
			font-size: 20px;
		}
	</style>
</head>

<body>

	<h2>Scope</h2>
	<?php
	$x = "outside"; //global

	function convert()
	{
		global $x;
		$x = "inside"; //inside
	}
	echo $x, "<br>";
	convert();
	echo $x;
	?>

	<hr>
	<h2>Return Function</h2>
	<?php

	function addNumbers($number1, $number2, $number3)
	{
		$sum = $number1 + $number2 + $number3;
		return $sum;
	}
	$result = addNumbers(10, 15, 20);
	echo $result;

	?>


	<hr>
	<h2>Parameters Function</h2>
	<?php

	function greeting($message)
	{
		echo $message, "<br>";
	}
	greeting("Hi");
	?>

	<?php
	function calculate($number1, $number2)
	{
		echo $number1;
		echo $number2, "<br>";
		$sum = $number1 + $number2;
		echo $sum;
	}
	calculate(8, 4);

	?>


	<hr>
	<h2>Defining Function</h2>
	<?php

	function myFirstFunction()
	{
		echo "This is my first function in PHP", '<br>';
	}
	myFirstFunction();

	function mySecondFunction()
	{
		echo 5 + 5, '<br>';
	}
	mySecondFunction();

	function myThirdFunction()
	{
		echo "This is my third function in PHP", '<br>';
	}
	myThirdFunction();

	function init()
	{
		echo "<br>";
		myFirstFunction();
		echo "<br>";
		mySecondFunction();
		echo "<br>";
		myThirdFunction();
	}
	init();

	?>



</body>

</html>