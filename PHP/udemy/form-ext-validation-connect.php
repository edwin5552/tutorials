<?php

if (isset($_POST['submit'])) {

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
