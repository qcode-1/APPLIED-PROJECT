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

	registerStudent();

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
	<style type="text/css">

	.wholeBody{
		background-image: url('images/background.jpg');
		max-height: 600px;
	}
</style>
<link rel="stylesheet" type="text/css" href="css/indexpage.css">



<title>Sign Up - ASCVigil&trade;</title>
</head>
<body>

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
					<a class="nav-link" href="view/login2.php">Login</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="wholeBody">

		<div class="container" id="container">


			<div class="row">

				<div class="col-3"></div>

				<div class="col-6">

					<div class="formHead">
						<h3 class="head3">SignUp</h3>
					</div>

					<form method="POST" onsubmit="return FormValidation();" onchange="return FormValidation();">
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Firstname</label>
							<div class="col-sm-10">
								<input type="text" class="form-control"  name="fname" id="inputFirstname" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : ''; ?>">
							</div>
							<span class="text-danger"><?php echo $fname_error ?></span>
						</div>
						<br>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Lastname</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputLastname" name="lname" value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : ''; ?>">
							</div>
							<span class="text-danger"><?php echo $lname_error; ?></span>
						</div>
						<br>
						<div class="form-group row">
							<label for="" class="col-sm-2">Class</label>
							<div class="col-sm-10">
								<select class="form-control" name="classes" id="inputClass" >
									<?php

									loadClasses();

									?>
								</select>
							</div>
							<span class="text-danger"><?php echo $class_error; ?></span>
						</div>
						<br>
						<div class="form-group row">
							<label for="exampleInputEmail1" class="col-sm-2">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" name="emladd" id="inputEmail" aria-describedby="emailHelp" value="<?php echo isset($_POST['emladd']) ? $_POST['emladd'] : ''; ?>">
							</div>
							<span class="text-danger"><?php echo $email_error; ?></span>
						</div>
						<br>
						<div class="form-group row">
							<label for="exampleInputPassword1" class="col-sm-2">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control"  name ="passd" id="inputPassword" placeholder="Password">
								<span class="text-danger"><?php echo $pass_error; ?></span>
							</div>
						</div>
						<div class="subButton">
							<button type="submit" name="register" class="btn btn-success">Sign Up</button>
						</div>

					</form>

				</div>

				<div class="col-3"></div>

			</div>

		</div>

	</div>




	<div class="footer bg-dark text-white">
		<p class="">&copy; AshVigil. All rights reserved.</p>
		<p>31st Beach Drive, Labadi; PMB CT 48, Cantomnets, Accra, Ghana.</p>
		<p>Phone: <span><b><i>+233.50.729.4075</i></b>  <i>OR</i>  <b><i>+233.302.679.043</i> </b></span></p>
		<p>Email: <b><i>ascvigil@ashesi.edu.gh</i></b></p>
		<p><b>2018</b></p>
	</div>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


	<script type="text/javascript">


		function FormValidation(){

			var fname = document.getElementById('inputFirstname').value;
			var lname = document.getElementById('inputLastname').value;
			var email = document.getElementById('inputEmail').value;
			var passd = document.getElementById('inputPassword').value;

			if(fname == ""){
				document.getElementById('inputFirstname').style.borderColor = "red";
			}else{
				document.getElementById('inputFirstname').style.borderColor = "green";
			}

			if(lname == ""){
				document.getElementById('inputLastname').style.borderColor = "red";	
			}else{
				document.getElementById('inputLastname').style.borderColor = "green";
			}

			if(email == ""){
				document.getElementById('inputEmail').style.borderColor = "red";
			}else{
				document.getElementById('inputEmail').style.borderColor = "green";
			}

			if(passd == ""){
				document.getElementById('inputPassword').style.borderColor = "red";
			}else{
				document.getElementById('inputPassword').style.borderColor = "green";
			}
		}

	</script>


</body>
</html>