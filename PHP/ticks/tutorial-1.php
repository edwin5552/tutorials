<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tutorial 1</title>
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



	<section class="py-5 border-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<h4 class="fw-semibold mb-4">Object Oriented Programming</h4>
					<div class="alert alert-info mt-4 mb-0">
						<?php
							class Employee {

								public $name;
								public $salary;

								public function __construct($name, $salary)
								{
									$this -> name = $name;
									$this -> salary = $salary;
								}

								public function show_details()
								{
									echo "Name = ".$this -> name;
									echo "<br>";
									echo "Salary = ".$this -> salary;
									echo "<br>";
								}

							}

							$e1 = new Employee("John", 15000);
							$e1 -> show_details();
							$e2 = new Employee("David", 25000);
							$e2 -> show_details();
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="py-5 border-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<h4 class="fw-semibold mb-4">Functions</h4>

					<div class="alert alert-info mt-4 mb-0">
						<?php
						function Sum1($n1, $n2)
						{
							return $n1 + $n2;
						}
						echo Sum1(10, 15);
						?>
					</div>

					<div class="alert alert-info mt-4 mb-0">
						<?php
						function Sum($n1, $n2)
						{
							$result = $n1 + $n2;
							echo $result;
						}
						Sum(10.5, 20.1);
						?>
					</div>

					<div class="alert alert-info mt-4 mb-0">
						<?php
						function printMessageName($name)
						{
							echo "Hello $name <br>";
						}
						printMessageName("John");
						?>
					</div>

					<div class="alert alert-info mt-4 mb-0">
						<?php
						function printMessage()
						{
							echo "Hello <br>";
						}
						printMessage();
						printMessage();
						printMessage();
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="py-5 border-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<h4 class="fw-semibold mb-4">Arrays</h4>
					<div class="alert alert-info mt-4 mb-0">
						<?php
						$fruits = array("apple", "orange", "banana");
						echo $fruits[2];
						echo "<br>";
						echo count($fruits);
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="py-5 border-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<h4 class="fw-semibold mb-4">While Loop</h4>
					<form action="tutorial-1.php" method="POST">
						<div class="mb-3">
							<label class="form-label" for="num1">Enter a number</label><br>
							<input type="text" class="form-control" name="num1" id="num1">
						</div>
						<div class="mb-3">
							<input type="submit" class="btn btn-dark" value="Submit">
						</div>
						<div class="alert alert-info mt-4 mb-0">
							<?php
							$num1 = $_POST["num1"];
							$a = 1;
							while ($a <= $num1) {
								echo "$a <br>";
								$a++;
							}
							?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="py-5 border-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<h4 class="fw-semibold mb-4">Switch Statement</h4>
					<form action="tutorial-1.php" method="POST">
						<div class="mb-3">
							<label class="form-label" for="char1">Enter a character</label><br>
							<input type="text" class="form-control" name="char1" id="char1">
						</div>
						<div class="mb-3">
							<input type="submit" class="btn btn-dark" value="Submit">
						</div>
						<div class="alert alert-info mt-4 mb-0">
							<?php
							$char1 = $_POST["char1"];
							switch ($char1) {
								case "A":
									echo "Apple";
									break;
								case "B":
									echo "Bat";
									break;
								case "C":
									echo "Cat";
									break;
								default:
									echo "Invalid character";
									break;
							}
							?>
						</div>
					</form>
					<hr>
					<form action="tutorial-1.php" method="POST">
						<div class="mb-3">
							<label class="form-label" for="num1">Enter A Number</label><br>
							<input type="text" class="form-control" name="num1" id="num1">
						</div>
						<div class="mb-3">
							<input type="submit" class="btn btn-dark" value="Submit">
						</div>
						<div class="alert alert-info mt-4 mb-0">
							<?php
							$num1 = $_POST["num1"];
							switch ($num1) {
								case 1:
									echo "ONE";
									break;
								case 2:
									echo "TWO";
									break;
								case 3:
									echo "THREE";
									break;
								default:
									echo "Invalid number";
									break;
							}
							?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="py-5 border-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<h4 class="fw-semibold mb-4">If Else Statement</h4>
					<form action="tutorial-1.php" method="POST">
						<div class="mb-3">
							<label class="form-label" for="num1">Enter A Number</label><br>
							<input type="text" class="form-control" name="num1" id="num1">
						</div>
						<div class="mb-3">
							<input type="submit" class="btn btn-dark" value="Submit">
						</div>
						<div class="alert alert-info mt-4 mb-0">
							<?php
							$num1 = $_POST["num1"];
							if ($num1 > 0) {
								echo "It is a <strong>positive</strong> number";
							} else if ($num1 < 0) {
								echo "It is a <strong>negative</strong> number";
							} else {
								echo "It is <strong>ZERO</strong>";
							}
							?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="py-5 border-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<h4 class="fw-semibold mb-4">POST Method</h4>
					<form action="tutorial-1.php" method="POST">
						<div class="mb-3">
							<label class="form-label" for="username">Enter your username</label><br>
							<input type="text" class="form-control" name="username" id="username">
						</div>
						<div class="mb-3">
							<label class="form-label" for="pass">Enter your password</label><br>
							<input type="password" class="form-control" name="pass" id="pass">
						</div>
						<div class="mb-3">
							<input type="submit" class="btn btn-dark" value="Submit">
						</div>
					</form>
					<div class="alert alert-info mt-4 mb-0">
						<?php
						$username = $_POST['username'];
						$password = $_POST['pass'];
						echo "<div>Username: <strong>$username</strong>  </div>";
						echo "<div>Password: <strong>$password</strong>  </div>";
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>