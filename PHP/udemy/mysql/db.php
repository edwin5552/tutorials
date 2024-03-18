<?php
$connection = mysqli_connect('localhost', 'root', '', 'udemyloginapp');
if (!$connection) {
	die("<div class='alert alert-danger'>Database Offline</div>");
}
