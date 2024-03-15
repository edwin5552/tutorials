<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<style>
		form {}
		form > div:not(:last-child) {
			margin-bottom: 15px;
		}
		form > div > label {
			font-weight: bold;
			display: block;
			margin-bottom: 5px;
		}
	</style>
</head>
<body>
	<h1>Blood Donation Camp</h1>

	<h4>Registration Form</h4>
	<form action="connect.php" method="post">

		<div>
			<label for="name">Name: </label>
			<input type="text" name="name" id="name">
		</div>

		<div>
			<label for="email">Email: </label>
			<input type="email" name="email" id="email">
		</div>

		<div>
			<label for="phone">Phone: </label>
			<input type="text" name="phone" id="phone">
		</div>

		<div>
			<label for="bgroup">Blood Group: </label>
			<input type="text" name="bgroup" id="bgroup">
		</div>

		<div>
			<input type="submit" id="submit">
		</div>
		
	</form>


</body>
</html>