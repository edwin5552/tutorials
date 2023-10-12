<?php
$con = mysqli_connect("localhost", "root", "", "tutorialRegValiForm");
if (!$con) {
	echo "connection error";
}
$name = htmlspecialchars(trim($_POST['username']));
$email = htmlspecialchars(trim($_POST['email']));
$pass = htmlspecialchars(trim($_POST['password']));
//$cpass = htmlspecialchars(trim($_POST['cpassword']));
$mobile = htmlspecialchars(trim($_POST['mobile']));

if (empty($name) || empty($email) || empty($pass) || empty($mobile)) {
	echo '<div class="alert alert-success">Please fill all required field</div>';
} else {
	$sql = "insert into users(username,email,password,mobile) values ('$name','$email','$pass','$mobile')";
	if ($res = mysqli_query($con, $sql)) {
		echo '<div class="alert alert-success">Data successfully inserted</div>';
	} else {
		echo '<div class="alert alert-warning">Data not inserted</div>';
	}
}
