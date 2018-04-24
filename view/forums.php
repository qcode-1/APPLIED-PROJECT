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

	<link rel="stylesheet" type="text/css" href="../css/forums.css">

	

	<title>Forums - ASCVigil&trade;</title>
</head>
<body>

	<?php
	session_start();
	// echo $_SESSION['user'];
	require_once("../database/process.php");
	require_once("../database/forumDatabase.php");

	if (isset($_POST['addDiscussion'])) {
		addForum($_SESSION['id']);
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
					<a class="nav-link" href="manifesto.php">Forums</a>
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



	


	<div class="jumbotron">
		<div class="container" style="text-align: center;">
			<h3 class="">Welcome To ASCVigil&trade; Forums</h3>
			<p class="">Share your ideas and thoughts with members of the Ashesi Community. Get insights on developments and also start discussions around your topics of interest. Please read the <a class="text-info" href="faq.php">FAQ's</a> before posting.</p>
		</div>
	</div>

	<div class="container">
		<br>
		<div class="row">

			<div class="col-lg-3">
				
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#discussionModal" data-whatever="">Start Discussion</button>

				<div class="modal fade" id="discussionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Start a Discussion</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							
							<div class="modal-body">
								<form method="POST">
									<div class="form-group">
										<label class="col-form-label">Topic</label>
										<input type="text" class="form-control" name="forumTopic" id="forumTopic">

									</div>
									<div class="form-group">
										<label>Category</label>
										<select class="form-control" name="forum_cat" id="forum_cat">
											<?php
											loadCategories();
											?>
										</select>
									</div>
									<div class="form-group">
										<label for="message-text" class="col-form-label">Post</label>
										<textarea class="form-control" name="forum_post" id="forum_post"></textarea>
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<input type="submit" name="addDiscussion" value="Post Discussion" id="addDiscussion" class="btn btn-info"/>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<br>
				<br>

				<div>
					<p>CATEGORIES</p>
					<hr>
					<ul style="list-style: none;">
						<?php
						//displays catgeories
						displayCategories();
						?>
					</ul>
				</div>

			</div>

			<div class="col-lg-9">
				<?php
				displayForums();
				?>
			</div>

		</div>
	</div>

	<div class="jumbotron">
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
		<p>Email: <b><i>ascvigil@ashesi.edu.gh</i></b></p>
		<p><b>2018</b></p>
	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

	<script>

		$('#addDiscussion').click(function() {

			var topic = $('#forumTopic').val();
			var cat = $('#forum_cat').val();
			var post = $('#forum_post').val();

			if (topic == '' && post == '') {
				alert("Please Fill The Required Fields");
				console.log("Please Fill The Required Fields");
			}

			else {

				$.ajax({
					url: "../controller/addDiscus.php",
					method: "POST",
					data: {topic:topic, cat:cat, post:post},
					success: function(data) {

						if (data == 'No') {
							alert("Wrong Data");
						}

						else {
							$("#discussionModal").hide();
							// location.reload();
						}
					}
				})
			}
		});

	</script>

	<script type="text/javascript">
		$( document ).ready(function() {
			$("#alertSuccess").delay(3000).fadeOut("slow");
		});
	</script>

</body>
</html>


