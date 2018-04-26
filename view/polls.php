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

	

	<title>Polls - ASCVigil&trade;</title>
</head>
<body>

	<?php

	require_once("../database/process.php");

	session_start();

	if (isset($_POST['subscribe'])) {
		optIN($_SESSION['id']);
	}

	?>



	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">

		

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
					<a class="nav-link" href="polls.php">Polls</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						ASC Aspirants Manifesto
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="edwinbenjManifesto.php">Edwin Adatsi &amp; Benjamin Annan</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="caroldavidManifesto.php">Carol Armah &amp; David Sasu</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="elvisyasminManiesto.php" >Elvis Okoh-Asirifi &amp; Yasmin Alhassan</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="forums.php">Forums</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						About
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">ASCVigil&trade;</a>
						<a class="dropdown-item" href="faq.php">FAQ's</a>
					</div>
				</li>
			</ul>
		</div>

		<span class="navbar-text">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="../index.php?logout">Logout<i class="fa fa-sign-out fa-fw"></i></a>

					<?php

					if (isset($_GET['logout'])) {
						session_destroy();
					}
					?>
				</li>
			</ul>
		</span>
	</nav>

	

	<div class="container">

		<h2 class="pollHead">View All Existing Polls <span class="badge badge-secondary">New (2)</span></h2>

		<hr>

		<div class="row">


			<div id="accordion">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Assessment of the ASC Presidency
							</button>
						</h5>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<h6>Description</h6>
							<p>The main aim of the poll is to assess the behaviour of the ASC president and his vice. By popular request, this poll is to acertain whether the right decion was made in voting for these particular candidates. It has come to a section of students in the student body that, the ASC president and vice are not acting acccordingly, taking into account the constitution. To take part in this poll, please <a href="presidentPoll.php">click here</a>.</p>
							<p>To view poll results, <a href="prespollresult.php">click here</a></p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Thoughts on ASC Outreach Activity
							</button>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body">
							<h6>Description</h6>
							<p>The main aim of the poll is to assess the level of inclusion of all student, particularly pertaining to events held on campus. For many students, events held by the ASC fail to properly represnet the diversified student community for what it is. Considering that there are both internatiopnal and Ghanaian nationsls here, the ASC must try to create and conducive atmosphere for everyone to co-exist. To take part in this poll, please <a href="inclusionPoll.php">click here</a>.</p>
							<p>To view poll results, <a href="inclusionpollresult.php">click here</a></p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Assess the performance of ASC Executive Committees
							</button>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body">
							<h6>Description</h6>
							<p>The main aim of the poll is to find out how well your class representatives are representing you. as a student of Ashesi, it is importnt to know what is bring done by class representatives to relay your messsage acrosee to their various committees. Class representatives exist to bridge the communication gap between the student government and the student body. The main aim of the poll is to find out how well your class representatives are representing you. as a student of Ashesi, it is importnt to know what is bring done by class representatives to relay your messsage acrosee to their various committees. Class representatives exist to bridge the communication gap between the student government and the student body. The main aim of the poll is to find out how well your class representatives are representing you. as a student of Ashesi, it is importnt to know what is bring done by class representatives to relay your messsage acrosee to their various committees. Class representatives exist to bridge the communication gap between the student government and the student body. To take part in this poll, please <a href="commEvaluation.php">click here</a>.</p>
							<p>To view poll results, <a href="commEvalResult.php">click here</a></p>
						</div>
					</div>
				</div>
			</div>
			<br>

		</div>
		<hr>
	</div>

	<div class="jumbotron jumbotron-fluid">
		<div class="container" style="text-align: center;">
			<h4>Want to receive regular updates?</h4>
			<form method="POST">
				<p><div class="input-group mb-3">
					<input type="email" class="form-control" placeholder="Enter your email" aria-label="User email" name="subEmail">
					<button class="btn btn-warning" type="submit" name="subscribe">Subscribe</button>
				</div></p>
			</form>
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
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="https://surveyjs.azureedge.net/1.0.13/survey.jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

	<script type="text/javascript">

		$( document ).ready(function() {
			$("#alertSuccess").delay(3000).fadeOut("slow");
		});

	</script>


</body>
</html>