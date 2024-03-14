<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Forms</title>
	<style>
		body {
			font-size: 20px;
		}
	</style>
</head>

<body>

	<?php
	if (isset($_POST['submit'])) {

		echo "Clicked" . "<br>";

		$username = $_POST['username'];
		$password = $_POST['password'];

		echo "Username:" . " " . $username . "<br>";
		echo "Password:" . " " . $password . "<br>";

		$usernameMin = 4;
		$usernameMax = 10;

		if (strlen($username) < $usernameMin) {
			echo "Username has to be longer than Four" . "<br>";
		};
		if (strlen($username) > $usernameMax) {
			echo "Username can't be longer than Ten" . "<br>";
		};

		$name = array("David", "John", "Jane");

		if (!in_array($username, $name)) {
			echo "Sorry you are not allowed" . "<br>";
		} else {
			echo "Welcome" . " " . $username . "<br>";
		}
	};


	?>

	<form action="forms-1.php" method="post">
		<input type="text" name="username" placeholder="username">
		<input type="password" name="password" placeholder="password">
		<input type="submit" name="submit">
	</form>

</body>

</html>