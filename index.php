<?php

	$fname_error = "";
	$lname_error = "";
	$email_error = "";
	$class_error = "";
	$pass_error = "";

if (isset($_POST['register'])) {
	
	if (empty($_POST['fname'])) {
		$fname_error = "<small>Please enter a name</small>";			
	}
	else {
		if (!preg_match("/^[a-zA-Z ]*$/", $_POST['fname'])) {
			$fname_error = "<small>Only letters and space is allowed</small>";
		}
	}


	if (empty($_POST['lname'])) {
		$lname_error = "<small>Please enter a name</small>";			
	}
	else {
		if (!preg_match("/^[a-zA-Z ]*$/", $_POST['lname'])) {
			$lname_error = "<small>Only letters and space is allowed</small>";
		}
	}

	if (empty($_POST['emladd'])) {
		$email_error = "<small>Please enter an email address</small>";			
	}
	else {
		if (!filter_var($_POST['emladd'], FILTER_VALIDATE_EMAIL)) {
			$email_error = "<small>Invalid email format</small>";
		}
	}

	if (isset($_POST['classes'])) {
					
	}
	else {
		$class_error = "<small>Please choose a class/small>";
	}

	if (empty($_POST['passd'])) {
		$pass_error = "<small>Please enter a password</small>";			
	}

	if ($fname_error == "" && $lname_error == "" && $email_error == "" && $class_error == "" && $pass_error = "") {

		registerStudent();

	}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/indexpage.css">

	

	<title>Sign Up - ASCVigil&trade;</title>
</head>
<body>

	<?php

	//don't display errors
	ini_set('display_errors', 0);
	//write errors to log
	ini_set('log_errors', 1);
	//error log file name
	ini_set('log_errors', 'error.log');

	error_reporting(E_ALL);

	require_once("database/process.php");

	require("mailer/welcomemailer.php");

	?>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">

		<a class="navbar-brand" href="index.php">
			<img src="images/logo.jpg">ASCVigil&trade;
		</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">

				<li class="nav-item">
					<a class="nav-link" href="view/login.php">Login</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container">


		<div class="row">

			<div class="col-3"></div>

			<div class="col-6">


				<h3 class="head3">SignUp</h3>

				<form method="POST" action="">
					<div class="form-group">
						<label for="inputFirstname">Firstname</label>
						<input type="text" class="form-control"  name="fname" id="inputFirstname" aria-describedby="emailHelp" placeholder="Enter firstname" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : ''; ?>">
						<span class="text-danger"><?php echo $fname_error ?></span>
					</div>
					<div class="form-group">
						<label for="inputLastname">Lastname</label>
						<input type="text" class="form-control" id="inputLastname" name="lname" aria-describedby="emailHelp" placeholder="Enter lastname" value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : ''; ?>">
						<span class="text-danger"><?php echo $lname_error; ?></span>
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1">Class</label>
						<select class="form-control" name="classes" id="exampleFormControlSelect1" >
							<?php

							loadClasses();

							?>
						</select>
						<span class="text-danger"><?php echo $class_error; ?></span>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" name="emladd" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo isset($_POST['emladd']) ? $_POST['emladd'] : ''; ?>">
						<span class="text-danger"><?php echo $email_error; ?></span>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control"  name ="passd" id="exampleInputPassword1" placeholder="Password">
						<span class="text-danger"><?php echo $pass_error; ?></span>
					</div>
					<div class="">
						<a href="fgpass.php"><span>Forgot Password?</span></a>
					</div>
					<button type="submit" name="register" class="btn btn-primary">Sign Up</button>
				</form>


			</div>

			<div class="col-3"></div>

		</div>

	</div>




	<div class="footer bg-dark text-white">
		<p class="">&copy; AshVigil. All rights reserved.</p>
		<p>31st Beach Drive, Labadi; PMB CT 48, Cantomnets, Accra, Ghana.</p>
		<p>Phone: <span><b><i>+233.50.729.4075</i></b>  <i>OR</i>  <b><i>+233.302.679.043</i> </b></span></p>
		<p>Email: <b><i>info@quickbuy.com</i></b></p>
		<p><b>2018</b></p>
	</div>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>