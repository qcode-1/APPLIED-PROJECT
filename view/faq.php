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

	

	<title>FAQ's - ASCVigil&trade;</title>

	</head>
	<body>

		<?php

		require_once("../database/process.php");

		date_default_timezone_set('Europe/London');

		if (isset($_POST['addComment'])) {
		insertComment();
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
				<!-- <li class="nav-item">
					<a class="nav-link" href="manifesto.php">Track Manifesto</a>
				</li> -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						ASC Aspirants Manifesto
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="edwinbenjManifesto.php">Edwin Adatsi &amp; Benjamin Annan</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item disabled" href="caroldavidManifesto.php">Carol Armah &amp; David Sasu</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item disabled" href="elvisyasminManiesto.php" >Elvis Okoh-Asirifi &amp; Yasmin Alhassan</a>
					</div>
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
					<a class="nav-link" href="../index.php?logout">Logout</a>

					<?php

					if (isset($_GET['logout'])) {
						session_start();
						session_destroy();
					}
					?>
				</li>
			</ul>
		</span>
	</nav>


	<div class="container">
		<div class="row">
			<br>
			<div class="col-12">
				<h2 class="cand" style="text-align: left;">Frequently Asked Questions</h2>
			</div>

			<div class="col-12">
				<nav id="navbar-example2" class="navbar navbar-light bg-light">
					<a class="navbar-brand" href="#">FAQ's</a>

					<!-- <ul class="nav nav-pills">
						<li class="nav-item">
							<a class="nav-link" href="#fat">@fat</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#mdo">@mdo</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#one">one</a>
								<a class="dropdown-item" href="#two">two</a>
								<div role="separator" class="dropdown-divider"></div>
								<a class="dropdown-item" href="#three">three</a>
							</div>
						</li>
					</ul> -->
				</nav>
				<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
					<br>
					<h5 >1.		What is ASCVigil&trade;?</h5>
					<p class="text-justify">ASCVigil&trade; is an intercative web platform that allows members of the Ashesi community to keep themselves up to date with affairs concerning student governance.</p>

					<h5 id="fat">2.		When was ASCVigil&trade; started?</h5>
					<p class="text-justify">ASCVigil&trade; was started in the spring semester of 2018. </p>

					<h5>3.		Who manages ASCVigil&trade;?</h5>
					<p>ASCVigil&trade; is managed and maintained by a final year student, Nii Quateboye Quartey (C' 2018). The work was initially made as a final year capstone project. It has proved useful to student affairs in the school and contributed immensely to effective and accountable student governance.</p>

					<h5>4.		How can i send feedback to an executive committee?</h5>
					<p>To send feeback to an executive committee or any member of an executive committee, go to the commmittee page. </p>

					<h5>5.		How can i view the manifestos of past candidates?</h5>
					<p>After electons (post-election period), menifestos of past candidatea are archived. they can be accessed on the manifesto page. On the manifesto page, please select archived manifesto's.</p>

					<h5>6.		How sure am i that my feedback is being received?</h5>
					<p>Feedback recived from forms are collated and delivered to the general secretary of student governnment.</p>

					<h5>7.		How do i view results of a poll?</h5>
					<p>To view results of a poll, go to the poll item in the menu and select view results from the drop down. Choose the polls results you wish to see. : )</p>

					<h5>8.		How can i contact ASCVigil&trade; team?</h5>
					<p>You can contact the team of ASCVigil&trade; by reaching out to us via the <a href="contactus.php">Contact Us</a> page.</p>
				</div>
			</div>

		</div>

		<br>
		<br>
		<hr>


		<!--  -->


	</div>

	<div class="jumbotron jumbotron-fluid">
		<div class="container" style="text-align: center;">
			<h5>Want to receive regular updates?</h5>
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
		<p>Email: <b><i>ascvigil@ashesi.edu.gh</i></b></p>
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