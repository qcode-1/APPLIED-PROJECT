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

	

	<title>Manifesto (Carol and Sasu) - ASCVigil&trade;</title>

</head>
<body>

	<?php

	require_once("../database/process.php");

	session_start();

	date_default_timezone_set('Europe/London');

	$_SESSION['page_id'] = 'caroldav17';

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
					<a class="nav-link" href="noPolls.php">Polls</a>
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
						<a class="dropdown-item" href="caroldavidManifesto.php">Carol Armah &amp; David Sasu</a>
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

					<h4 class="cand">MANIFESTO FOR CAROL ARMAH AND DAVID SASU</h4>
					<p class="text-justify">Hello Ashesi Community,
						Before I delve into the details of the plans that are within our manifesto, I would like you to first have at the back of your mind that the plans that have been enlisted below have been carefully crafted and put together with your optimum well-being and success in mind. 
						Carol and I have spent considerably long periods of time asking ourselves about what would have the most impact on the lives of each and every student and we came up with a host of ideas that have been fine-tuned and polished into policies that we believe would not only enable you to not only excel academically but would also enable you to enjoy your stay on this enthralling campus and achieve your dreams. 
					It is our hope that as you read about the wonderful and thoughtful plans that we have for you, you would share in our vision and join us on this wonderful journey towards the realisation of these plans.</p>

					<h5>POLICIES FOR ACADEMICS:</h5>

					<p class="text-justify">Carol and I have been made aware of the continuous and unabating work load that is being placed on the Ashesi student on a daily basis. To address this problem and help the Ashesi student to manage this work load, Carol and I have come up with two solutions for this problem. They are:
						"	The "I made it" campaign
						The "I made it" campaign is an new initiative being introduced by Carol and I whereby at the beginning of every new semester, a drop-box folder containing video interviews of the top students of the courses that are about to be taken in that semester will be sent to the entire student body. In these videos, these top students would share their experiences, study tips and exam preparation strategies so that all the students that are now about to take the course would benefit from these experiences and advice and tailor their own learning strategies accordingly.  
						"	The establishment of permanent quiet study places on campus.
					This idea was inspired from the 'No phone study zone" that organized by the Academic Committee this semester. In this policy, certain specific classrooms would be designated as permanent quiet study spaces after lectures so that you can get all of your work done without noise. Just imagine! , no more roaming around to get a quiet place to study.</p>

					<h5>POLICIES FOR THE ASHESI STUDENT SCHOLARSHIP FUND:</h5>
					<p class="text-justify">
						Carol and I realised that there are entrepreneurial ventures on campus that are generating so much profit and are not necessarily being supported or utilized in any way. In light of this realization, one of our policies is to invest into these profitable student entrepreneurial ventures and cover part of their cost of operations. In doing this, the student council would be able to obtain a part of the profit obtained from these businesses and all of this profit obtained would be ploughed back into the Ashesi Student Scholarship fund. 
					In doing this, we not only encourage student entrepreneurial activities but we also ensure the continuous flourishing of the Student Scholarship Fund to ensure that students who are experiencing difficulty in paying their school fees would have something substantial to fall back on. Carol and I think that this is a much more effective, sustainable and cost-effective solution to the growth of the student scholarship fund than old way of utilizing fundraisers and other programs to raise funds for the scholarship fund.</p>

					<h5>POLICIES FOR THE MAXIMUM UTILIZATION ALUMNI NETWORKS</h5>

					<p class="text-justify">Upon deep thought and introspection, Carol and I realised that the Alumni Networks of this school is not being utilized in anyway. We discovered that the student body has no relationship with the alumni. This is a problem because the entire student body is missing out on an untapped resource of mentorship and career opportunities. In light of this realisation, we have decided to organize a broad range of activities and talks with influential alumni to enable them to know us and also to enable us to expand on our professional network and knowledge.</p>

					<h5>POLICIES FOR THE FULL EXPRESSION OF THE ASHESI STUDENT</h5>
					<p class="text-justify">
						Over the course of our stay on the Ashesi Campus, we have realised that students who wish fully and freely express themselves refrain from doing so because they believe that they would be victimized or judged for their views. However those who are brave enough to air their views through public emails become frustrated because not only are they judged but they also feel as if their views have not had any sort of impact. To help solve this problem, Carol and I have come up with an idea called "The State of Innovation". 
						With this idea, a form would be sent to entire student body every week to receive concerns and views about the various happenings on campus. The views and thoughts collected would then be formed into a formal document which would be presented to the school authorities to ensure that the student views and thoughts are heard and addressed. 
					The student body would also be given frequent updates on the communication between the Ashesi Student Council and the School administration on these views.</p>

					<h5>POLICIES ON ENTERTAINMENT</h5>

					<p class="text-justify">
						Carol and I realised that at the end of every final exams, activities on campus die down and the entire campus assumes a very boring atmosphere. In light of this, we intend to throw the biggest end of semester party you have ever seen every semester!! Just imagine how hard you would be able to party at the end of the semester when you know that you have no assignment or quiz to worry about!! We know that this would make the campus very vibrant and would give everyone something to look forward to at the end of the semester. 😊
					Aside this we have a host of other fun activities lined up every semester, with every activity contributing to a particular theme for the semester.</p>

					<h5>POLICIES FOR INTERNATIONAL STUDENTS</h5>
					<p class="text-justify">
						Upon interacting with several international students, they made know to us that when they arrived in Ghana to study, they wished that they had the opportunity to have Ghanaian host families so that they could better understand and enjoy the Ghanaian culture. To address this need we are working with the ODIP to formulate a Ghanaian family host program for the incoming freshmen who are international students to enable them to better integrate into the Ghanaian society.
					We would also ensure that international students are indeed represented on the Ashesi Student Council to guarantee that their voice is represented in any major decision process.</p>

					<p class="text-justify">We hope that as you have read through our policies you are now convinced that we are indeed the best pair for the job. Just imagine all of the wonderful things that you will be missing out on if you don't vote us into power. 
						We love you that is why we put so much thought and energy into forming these policies. 
					Allow us to serve you and express our love and gratitude to you.</p>
					<br>

					<p>-Your aspiring humble servant leaders,
					Carol and Sasu (C.S).</p>

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