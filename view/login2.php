<?php


//don't display errors
ini_set('display_errors', 0);
//write errors to log
ini_set('log_errors', 1);
//error log file name
ini_set('log_errors', '../error.log');
error_reporting(E_ALL);

require_once("../database/process.php");


$email_error = "";
$pass_error = "";

if (isset($_POST['login'])) {

	if (empty($_POST['email'])) {
		$email_error = "<div class='alert alert-danger' role='alert'>
		This is a danger alert—check it out!
		</div>";			
	}
	else {
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$email_error = "<small>Invalid email format</small>";
		}
	}

	if (empty($_POST['pass'])) {
		$pass_error = "<small>Please enter a password</small>";			
	}

	if ($email_error == "" && $pass_error == "") {

		$eml = $_POST['email'];
		$password = $_POST['pass'];
		loginStudent($eml, $password);
	}
}

?>


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
	<style type="text/css">

	.wholeBody{
		background-image: url('../images/background.jpg');
		background-color: #343A40;
		max-height: 600px;
	}

</style>
<link rel="stylesheet" type="text/css" href="../css/login2.css">



<title>Login - ASCVigil&trade;</title>
</head>
<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">

		<a class="navbar-brand" href="login2.php">
			<img src="../images/logo.jpg">ASCVigil&trade;
		</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">

				<li class="nav-item">
					<a class="nav-link" href="../index.php">Sign Up</a>
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
						<h3 class="head3">Login</h3>
					</div>

					<form method="POST" onsubmit="return FormValidation();" onchange="return FormValidation();">
						
						<div class="form-group row">
							<label for="exampleInputEmail1" class="col-sm-2">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" name="email" id="inputEmail" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
							</div>
							<span class="text-danger"><?php echo $email_error; ?></span>
						</div>

						<br>

						<div class="form-group row">
							<label for="exampleInputPassword1" class="col-sm-2">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control"  name ="pass" id="inputPassword" placeholder="Password">
								<span class="text-danger"><?php echo $pass_error; ?></span>
							</div>
						</div>
						<div class="">
							<a href="passwordreset.php" class="text-secondary"><span>Forgot Password?</span></a>
						</div>
						<div class="subButton">
							<button type="submit button" class="btn btn-success" name="login">Login</button>
						</div>

					</form>
					<small>Not a member? <a class="text-secondary font-italic" href="../index.php">Sign Up</a></small>

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

			var fname = document.getElementById('inputEmail').value;
			var passd = document.getElementById('inputPassword').value;

			if(fname == ""){
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