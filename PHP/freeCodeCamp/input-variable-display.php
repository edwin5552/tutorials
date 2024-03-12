<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP</title>
</head>

<body>
	<form action="input-variable-display.php" method="post">
		<input type="text" name="name" placeholder="Name">
		<input type="password" name="password" placeholder="password">
		<input type="submit" value="submit">
	</form>
	<br>
	<?php
	echo $_POST["name"], '<br>';
	echo $_POST["password"];
	?>

	<hr>

	<form action="input-variable-display.php" method="post">
		<input type="text" name="firstNumber" placeholder="Number">
		<input type="submit" value="submit">
	</form>

	<?php
	$var = $_POST["firstNumber"];
	echo $_POST["firstNumber"], '<br>';
	if ($var > 1) {
		echo "True";
	} else {
		echo "False";
	}
	?>

</body>

</html>