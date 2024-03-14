<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP</title>
</head>

<body>
	<form action="camp-1.php" method="post">
		<input type="text" name="student" placeholder="Value">
		<input type="submit" Value="submit">
	</form>

	<?php
	$rollno = array("Jim" => "1", "Pam" => "2", "Dave" => "3");
	echo $rollno[$_POST["student"]];
	?>
</body>

</html>