<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MySQL Code - Index</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
	<style>
		body {
			font-size: 16px;
			font-weight: 400;
			color: #282828;
		}
	</style>
</head>
<body>

		<section class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 mx-auto">
						<?php

							$host = "localhost";
							$username = "root";
							$passwd = "";
							$database = "tutorial-md-1";

							$connection = mysqli_connect($host, $username, $passwd, $database);

							if ($connection) {
								echo '<div class="alert alert-primary">' . 'Database Online' . '</div>';
							} else {
								die ('<div class="alert alert-danger">' . 'Database Offline' . '</div>');
							}

							$name = $_POST['name'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];

							$sql = "INSERT INTO contact (name, email, phone) VALUES ('$name', '$email', '$phone')";

							if (mysqli_query($connection, $sql)) {
								echo '<div class="alert alert-success">' . 'Data inserted' . '</div>';
							} else {
								echo '<div class="alert alert-warning">' . 'Data not inserted' . '</div>';
							}

							mysqli_close($connection);

						?>
						<a href="index.html" class="link-offset-2">Back to form</a>
					</div>
				</div>
			</div>
		</section>
	
</body>
</html>



