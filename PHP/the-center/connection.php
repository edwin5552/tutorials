<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Connection</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section class="py-5">
		<div class="container">


		<?php

			$host = "localhost";
			$username = "root";
			$passwd = "";
			$database = "tutorial-the-center";
			$connection = mysqli_connect($host, $username, $passwd, $database);

			if ($connection) {
				echo '<div class="alert alert-primary">' . 'Database Online' . '</div>';
			} else {
				die ('<div class="alert alert-danger">' . 'Database Offline' . '</div>');
			}

			$name = $_POST["full_name"];
			$email = $_POST["email"];
			$phone = $_POST["phone_no"];
			$gender = $_POST["gender"];
			$dob = $_POST["dob"];

			$sql = "INSERT INTO register (name, email, phone, gender, dob) VALUES ('$name', '$email', '$phone', '$gender', '$dob')";

			if (mysqli_query($connection, $sql)) {
				echo '<div class="alert alert-success">' . 'Data inserted' . '</div>';
			} else {
				echo '<div class="alert alert-warning">' . 'Data not inserted' . '</div>';
			}


			mysqli_close($connection);
		?>
			
		</div>
	</section>
</body>
</html>