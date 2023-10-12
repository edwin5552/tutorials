<?php

require_once "db.php";

function display_data()
{
	global $connect;
	$query = "SELECT * FROM users";
	$result = mysqli_query($connect, $query);
	return $result;
}
