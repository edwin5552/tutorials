<?php
require_once('db.php');
require_once('functions.php');

$result = display_data();

// $query = "SELECT * FROM users";
// $result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Database</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&display=swap">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
	<section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-12">

					<h1 class="display-5 mb-5 text-center">Fetch Data From DB</h1>

					<div class="text-end mb-3">
						<a href="registration.php" class="btn btn-dark"><i class="fa-solid fa-left-long me-2"></i>Back</a>
					</div>

					<table class="table table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Username</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Password</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<?php
								while ($row = mysqli_fetch_assoc($result)) {
								?>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['username']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td><?php echo $row['mobile']; ?></td>
									<td><?php echo $row['password']; ?></td>
									<td><a href="#" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i></a></td>
									<td><a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a></td>
							</tr>

						<?php
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