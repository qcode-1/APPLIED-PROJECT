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

	<link rel="stylesheet" type="text/css" href="../css/comm.css">

	

	<title>Feedback Form - ASCVigil&trade;</title>
</head>
<body>

	<?php

	require_once("../database/process.php");

	?>



	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">

		<!-- <div class="container"> -->

			<a class="navbar-brand" href="home.php">
				<img src="../images/logo.jpg">ASCVigil&trade;
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="committee.php">Committees</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="manifesto.php">Track Manifesto</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Parliament</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="polls.php">Polls</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							About
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">ASCVigil&trade;</a>
							<a class="dropdown-item" href="#">FAQ's</a>
						</div>
					</li>
				</ul>

			</div>
			<span class="navbar-text">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="../index.php">Logout</a>
					</li>
				</ul>
			</span>

			<!-- </div> -->
		</nav>


		<div class="container">

			<div class="row">

				<div class="w-100"><br></div>

				<div class="col-2"></div>


				<div class="col-8">
					<h3>Feedback Form - Outreach Committee</h3>
					<form>
						<div class="form-group">
							<label for="exampleFormControlInput1">Email address</label>
							<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="your email address">
						</div>

						<div class="form-group">
							<label for="exampleFormControlTextarea1">Your comments</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="add comments.."></textarea>
						</div>
						<button type="submit" class="btn btn-primary mb-2">Submit</button>
					</form>
				</div>

				<div class="col-2"></div>

			</div>

		</div>

		<div class="jumbotron jumbotron-fluid">
			<div class="container" style="text-align: center;">
				<h4>Want to receive regular updates?</h4>
				<p><div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Enter your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<span class="input-group-text bg-warning" id="basic-addon2">Subscribe</span>
					</div>
				</div></p>
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