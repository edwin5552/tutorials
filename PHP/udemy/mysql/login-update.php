<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>

	<?php include "db.php"; ?>
	<?php include "functions.php"; ?>
	<?php
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];

		$query = "UPDATE users SET";
		$query .= "username = '$username'";
		$query .= "password = '$password'";
		$query .= "WHERE id = $id";

		$result = mysqli_query($connection, $query);
		if (!$result) {
			die('Query FAILED' . mysqli_error($connection));
		}
	}
	?>

	<section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<div class="card">
						<div class="card-body">

							<form action="login-update.php" method="post">
								<div class="mb-3">
									<label class="form-label" for="username">Username</label>
									<input type="text" class="form-control" id="username" name="username">
								</div>
								<div class="mb-3">
									<label class="form-label" for="password">Password</label>
									<input type="password" class="form-control" id="password" name="password">
								</div>
								<div class="mb-3">
									<label class="form-label">IDs</label>
									<select class="form-select" name="id" id="">

										<?php
										showAllData();
										?>

									</select>
								</div>
								<div class="mb-3 pt-2">
									<input type="submit" class="btn btn-primary" name="submit" value="UPDATE">
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