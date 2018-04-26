<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../css/indexpage.css">

	<title>Forgot Password - ASCVigil&trade;</title>
</head>
<body>

	<?php

	require_once("../database/process.php");

	//don't display errors
	ini_set('display_errors', 0);
	//write errors to log
	ini_set('log_errors', 1);
	//error log file name
	ini_set('log_errors', '../error.log');

	error_reporting(E_ALL);

	session_start();

	?>


	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">

		<a class="navbar-brand" href="index.php">
			<img src="../images/logo.jpg">ASCVigil&trade;
		</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">

				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
			</ul>
		</div>
	</nav>


	<div class="container">


		<div class="row">

			<div class="col-3"></div>

			<div class="col-6">


				<h3 class="head3">Get Back Into Your Account</h3>

				<form action="" method="POST">
					
					<div class="form-group">
						<label for="exampleInputEmail1">Please enter a valid email address</label>
						<input type="email" name="eml" readonly  class="form-control" aria-describedby="emailHelp" value="<?php echo $_SESSION['emailadd'];?>">
						<small id="email" class="form-text text-muted">We'll send you an email shortly.</small>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="enter your new password" required>
					</div>
					<button type="submit button" class="btn btn-primary" data-toggle="modal" name="changePass" class="btn btn-primary">Change Password</button>
				</form>

				<?php

				$email = $_POST['eml'];
				$pass = $_POST['pass'];

				if (isset($_POST['changePass'])) {

					changePassword($email, $pass);

				}

				?>

			</div>

			<div class="col-3"></div>

		</div>

	</div>


	<div class="footer bg-dark text-white">
		<p class="">&copy; AshVigil. All rights reserved.</p>
		<p>31st Beach Drive, Labadi; PMB CT 48, Cantomnets, Accra, Ghana.</p>
		<p>Phone: <span><b><i>+233.50.729.4075</i></b>  <i>OR</i>  <b><i>+233.302.679.043</i> </b></span></p>
		<p>Email: <b><i>admin@ascvigil.com</i></b></p>
		<p><b>2018</b></p>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>