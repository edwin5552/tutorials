<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Arrays</title>
	<style>
		body {
			font-size: 20px;
		}
	</style>
</head>

<body>

	<h2>Associative Arrays</h2>

	<?php

		$nameList = array('John', 'Jane', 'Deo', 'Mark');
		print_r($nameList);

		$singleNameList = array('first_name' => 'John', 'last_name' => 'Deo');
		print_r($singleNameList);
		echo '<br>';
		echo $singleNameList['first_name'] . " " . $singleNameList['last_name'];

		echo '<h2 class="h1">' . '' . $singleNameList['first_name'] . '' . '</h2>';

	?>

	<hr>

	<h2>Arrays</h2>

	<?php

		$myList = array(100, "Pen", 55, "Box");

		print_r($myList);
		echo "<br>";
		echo $myList[3] . "<br>";
		echo $myList[0] . "<br>";

	?>

</body>

</html>