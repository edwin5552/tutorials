<!DOCTYPE html>
<html>

<head>
	<title>Registration form validation using jquery ajax and php</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&display=swap">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
		body {
			font-family: 'DM Sans', sans-serif;
			font-size: 16px;
		}
		.error input {
			border-color: red;
			border-width: 2px;
		}
		.success input {
			border-color: green;
			border-width: 2px;
		}
		.error span {
			color: red;
		}
		.success span {
			color: green;
		}
		span.error {
			font-size: .875em;
			margin-top: .25rem;
			color: red;
			display: block;
			width: 100%;
			line-height: 1.2;
		}
		i {
			font-weight: 900;
			font-family: 'Font Awesome 5 Free';
		}
	</style>
</head>

<body class="bg-light">

	<section class="py-5">
		<div class="container">
			<div class="col-lg-4 mx-auto">
				<div class="card shadow-sm">
					<div class="card-header px-4">
						<h5 class="card-title text-center mb-0 py-2">Registration form validation using jquery ajax and php</h5>
					</div>
					<div class="card-body p-4">
						<div id="message"></div>
						<form method="POST" id="myform">
							<div class="form-group mb-3">
								<label for="username" class="form-label">Username:</label>
								<input type="text" name="username" id="username" class="form-control">
								<span class="error" id="username_err"></span>
							</div>
							<div class="form-group mb-3">
								<label for="email" class="form-label">Email:</label>
								<input type="email" name="email" id="email" class="form-control">
								<span class="error" id="email_err"> </span>
							</div>
							<div class="form-group mb-3">
								<label for="mobile" class="form-label">Mobile</label>
								<input type="text" name="mobile" id="mobile" class="form-control">
								<span class="error" id="mobile_err"> </span>
							</div>
							<div class="form-group mb-3">
								<label for="password" class="form-label">Password:</label>
								<div class="input-group">
									<input type="password" name="password" id="password" class="form-control">
									<button class="btn btn-outline-secondary input-group-append" type="button" onclick="password_show_hide();">
										<i class="fas fa-eye" id="show_eye"></i>
										<i class="fas fa-eye-slash d-none" id="hide_eye"></i>
									</button>
								</div>
								<span class="error" id="password_err"> </span>
							</div>
							<div class="form-group mb-3">
								<label for="conpassword" class="form-label">Confirm Password:</label>
								<input type="password" name="cpass" id="cpassword" class="form-control">
								<!-- <h5 id="conpasscheck" style="color: red;">**Password didn't match</h5> -->
								<span class="error" id="cpassword_err"> </span>
							</div>
							<div class="form-group pt-2 text-center">
								<button type="button" id="submitbtn" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="validation.js"></script>
</body>

</html>