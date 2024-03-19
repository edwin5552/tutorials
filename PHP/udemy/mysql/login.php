<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>

	<section class="p-5 pb-0">
		<?php

		if (isset($_POST['submit'])) {
			// echo "yes we got it" . "<br>";

			$username =  $_POST['username'];
			$password =  $_POST['password'];

			if ($username && $password) {
				echo $username . "<br>";
				echo $password . "<br>";
			} else {
				echo "<div class='alert alert-warning'>Field can't be blank</div>" . "<br>";
			}

			$connection = mysqli_connect('localhost', 'root', '', 'udemyloginapp');
			if ($connection) {
				echo "<div class='alert alert-primary'>Database Online</div>" . "<br>";
			} else {
				die("<div class='alert alert-danger'>Database Offline</div>");
			}

			$query = "INSERT INTO users(username, password) VALUE ('$username', '$password')";
			$result = mysqli_query($connection, $query);

			if (!$result) {
				die('Query FAILED' . mysqli_error());
			}
		}

		?>
	</section>


	<section class="py-5">
		<div class="container">
			<div class="row">
				<div c lass="col-lg-8 mx-auto">
					<div class="card">
						<div class="card-body">

							<form action="login.php" method="post">
								<div class="mb-3">
									<label class="form-label" for="username">Username</label>
									<input type="text" class="form-control" id="username" name="username">
								</div>
								<div class="mb-3">
									<label class="form-label" for="password">Password</label>
									<input type="password" class="form-control" id="password" name="password">
								</div>
								<div class="mb-3">
									<input type="submit" class="btn btn-primary" name="submit" value="Submit">
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>