<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Preview - My SQL</title>
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
				<div class="col-12">
					
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
							</tr>
						</thead>
						<tbody>

						<?php

							$host = "localhost";
							$username = "root";
							$passwd = "";
							$database = "tutorial-md-1";

							$connection = mysqli_connect($host, $username, $passwd, $database);

							if ($connection -> connect_error) {
								die ('Connection failed' . $connect -> connect_error);
							}

							$sql = "SELECT reg_no, name, email, phone from contact";
							// echo $sql . "<br>";

							$result = $connection -> query($sql);

							if ($result -> num_rows > 0) {
								while ($row = $result -> fetch_assoc()) {
									// echo $row["reg_no"] . "<br>";
									// echo $row["name"] . "<br>";
									// echo $row["email"] . "<br>";
									// echo $row["phone"] . "<br>";

									echo "<tr><td>" . $row["reg_no"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><tr>";
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