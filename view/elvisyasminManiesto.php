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

	<!-- <link rel="stylesheet" type="text/css" href="../css/manifesto.css"> -->

	<title>Manifesto (Elvis and Yasmin) - ASCVigil&trade;</title>

</head>
<body>

	<?php

	require_once("../database/process.php");

	date_default_timezone_set('Europe/London');

	session_start();

	$_SESSION['page_id'] = 'elvisyas17';

	if (isset($_POST['addComment'])) {
		insertComment($_SESSION['page_id']);
	}

	?>



	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">

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
				<!-- <li class="nav-item">
					<a class="nav-link" href="manifesto.php">Track Manifesto</a>
				</li> -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						ASC Aspirants
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="caroldavidManifesto.php">Carol Armah &amp; David Sasu</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="edwinbenjManifesto.php">Edwin Adatsi &amp; Benjamin Annan</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="elvisyasminManiesto.php">Elvis Okoh-Asirifi &amp; Yasmin Alhassan</a>
					</div>
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
	</nav>



	<div class="container">
		<div class="row">
			
			<div class="col-2">
			</div>

			<div class="col-8">
				<h2 class="cand" style="text-align: center;">ASC ASPIRANTS</h2>

			</div>

			<div class="col-2"></div>

			<div class="col-12">
				
				<p>

					<h4 class="cand">MANIFESTO FOR ELVIS OKOH-ASRIFI &amp; YESMIN ALHASSAN</h4>
					<p class="text-justify">Good evening ladies and gentlemen of this wonderful community,</p>

					<p class="text-justify">
						We are here as team to present to you what we have to give to the student body when we voted
						into power. Our aim as a team is to foster healthy and a strong sense of togetherness among
						the student body as well as the relationship between staff and the student body.
						First of the all, we want to look into the issue of Ashesi Student Scholarship Fund. We want to
						increase scholarship fund by raising funds at the beginning of every semester in addition to the
						boxes that are made available at Akornor. We aim to get revenue from student ventures which
					we hope to promote during our tenure of office.</p>

					<p class="text-justify">
						To promote student businesses on campus, we will use rooftop to encourage student
						entrepreneurs to sell their products and they are given contracts to supply items during ASC
						events, as well as the ASC organising events to promote these businesses, aside the venture
					accelerator that provides funding and ideas</p>

					<p class="text-justify">Secondly, we want to Get wheeled chairs to carry people who faint in class or get injured during
					a sporting activity</p>

					<p class="text-justify">
						Also, due to his turnover rate of students on campus we will organise end of semester
						conversations about courses that will be running, their prerequisites and which ones students
						will be encouraged to choose based on their abilities, interests and career paths to reduce
					turnover of students.</p>

					<p class="text-justify">
						To get the ASC on their toes we will have monthly evaluation of officers and presidents as to
					what they are doing right and wrong and how they can get better.</p>

					<p class="text-justify">
						Again, getting student to be solutions to problems on campus is one thing we want to promote
						and we will do this by giving students the opportunity to own their experience. We will get
						students to develop apps and equipment that can solve their own problems, creating a
						convenient environment on campus and also on the Ashesi farm to increase productivity and
					hence income.</p>

					<p class="text-justify">Transparency is one key thing that our tenure our office will do it to make students aware of
						everything that happens, every decision that will affect them and why those things happen.
					Students also get to voice their opinions and complaints.</p>

					<p class="text-justify">Also, we have realized that the ASC spends thousands of ghana cedis in a semester on sound
						which is very expensive we therefore plan to get assets for the ASC -- speakers, and a vehicle
						for a start.
						Bearing in mind that we are in diversified community of people from Africa, we cannot read can
						leave this stay without saying the international community is one of our top most priorities as
						well. In our vision, we are going to show great interest in International student activities and
						hyping them the same way ASC activities will be hyped. A percentage of international students
					to be represented in government.</p>

					<p class="text-justify">The Keche league is coming… Students get to display what they can do during events --
						cooking skills, eating competitions, dances etc. They should not be limited to only the talent
					shows.</p>

					<p class="text-justify">Redefining code fair to solve students problems rather than making them write code that might
					never be used again.</p>

					<p class="text-justify">Promote more outreach activities that will be shown on the website. We will also leverage on the
					website to raise funds for projects. Students businesses will also be marketed on the websites.</p>

					<p class="text-justify">We all know that there are too many things that holds us together and sometimes put factions
						that we have to look into because they divide us a student body here in Ashesi University.
						Coming elections on Monday, consider voting for no other team that YesSir with Yes for Yesmin
						and Sir for Sir Elvis for the student council. We will make it our topmost priority to make students
					a part of every milestone in the student journey.</p>
					<br>

					<p>-
					Elvis &amp; Yesmin</p>

				</p>
			</div>

		</div>

		<br>
		<br>
		<hr>


		<div class="row">

			<div class="col-8">
				
				<h4>Comments Section</h4>

				<?php 

				displayComments($_SESSION['page_id']);

				?>
				


				<form method="POST" action="">

					<div class="form-group">
						<input type="hidden" class="form-control" name="user" id="userName" aria-describedby="user" value="<?php echo $_SESSION['user'];?>">
					</div>

					<div class="form-group">
						<input type="hidden" class="form-control" name="datetime" id="userName" aria-describedby="user" value="<?php echo date("Y-m-d H:i:s"); ?>">
					</div>

					<div class="form-group">
						<label>Add Comment</label>
						<textarea class="form-control" name="commnt" id="commentText" rows="3"></textarea>
					</div>
					<button type="submit" id="cmmBtn" name="addComment" disabled="true" class="btn btn-primary mb-2">Add Comment</button>

					<div class="form-group bttn">
						<div class="form-check">
							<input class="form-check-input" name="anonCheck" type="checkbox" value="Anon">
							Keep Me Anon

						</div>
					</div>

				</form>

			</div>

			<div class="col-4"></div>

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


</body>

<script src="../js/jquery-3.3.1.min.js"></script>

<script type="text/javascript">

	document.getElementById("commentText").addEventListener("keyup", ()=>{
		document.getElementById("cmmBtn").disabled = false;

	})

	

</script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>





</body>
</html>