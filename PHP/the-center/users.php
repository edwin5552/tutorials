<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Users | The Center</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="h3 text-center mb-5">Users</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12">

					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Gender</th>
								<th>Date of Birth</th>
							</tr>
						</thead>
						<tbody>
							<?php

							$host = "localhost";
							$username = "root";
							$passwd = "";
							$database = "tutorial-the-center";
							$connection = mysqli_connect($host, $username, $passwd, $database);

							if ($connection) {
								echo '<div class="alert alert-primary">' . 'Database Online' . '</div>';
							} else {
								die('<div class="alert alert-danger">' . 'Database Offline' . '</div>');
							}

							$sql = "SELECT reg_no, name, email, phone, gender, dob from register";

							$result = $connection->query($sql);

							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {

									// echo $row["reg_no"] . "<br>";
									// echo $row["name"] . "<br>";
									// echo $row["email"] . "<br>";
									// echo $row["phone"] . "<br>";

									echo "<tr><td>" . $row["reg_no"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["dob"] . "</tr>";
								}
								echo "</table>";
							}

							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</body>

</html>