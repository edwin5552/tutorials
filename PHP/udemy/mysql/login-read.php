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

		$connection = mysqli_connect('localhost', 'root', '', 'udemyloginapp');
		if ($connection) {
			echo "<div class='alert alert-primary'>Database Online</div>" . "<br>";
		} else {
			die("<div class='alert alert-danger'>Database Offline</div>");
		}

		$query = "SELECT * FROM users";
		$result = mysqli_query($connection, $query);

		if (!$result) {
			die('Query FAILED' . mysqli_error());
		}

		?>
	</section>


	<section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">

					<?php
					while ($row = mysqli_fetch_assoc($result)) {
					?>
						<pre>
						<?php
						print_r($row);
						?>
						</pre>

					<?php
					}
					?>

				</div>
			</div>
		</div>
	</section>
</body>

</html>