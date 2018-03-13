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

	

	<title>Manifesto (Edwin and Benjamin) - ASCVigil&trade;</title>

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
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">

		<a class="navbar-brand" href="home.php">
			<img src="../images/logo.jpg">ASCVigil&trade;
		</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- <div class="collapse navbar-collapse" id="navbarNavDropdown">
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

		</div> -->

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
						<a class="dropdown-item disabled" href="caroldavidManifesto.php">Carol Armah &amp; David Sasu</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item disabled" href="elvisyasminManiesto.php">Elvis Okoh-Asirifi &amp; Yasmin Alhassan</a>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						JEC Aspirants Manifesto
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="benjnanaManifesto">Benjamin Kusi &amp; Nana Ehoa Acquaye</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="chretonam.php">Christopher Zanu &amp; Etonam Dotse</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="molaud.php">Molife Chaplain &amp; Audrey Mutswiri</a>
					</div>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="#">Parliament</a>
				</li> -->
				
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

					<h4 class="cand">MANIFESTO FOR EDWIN ADATSI AND BENJAMIN ANNAN</h4>
					<p><strong>Our Message to You!</strong></p>
					<p class="text-justify">It is all about you. The vision outlined in this manifesto was not from two individuals but a solid team of experienced individuals who have served in various capacities on previous ASCs. This team is made up of multiple nationalities, year groups, religions and different genders.</p>

					<p class="text-justify">Ashesi is made up of different nationalities and as such, when one refers to Ashesi as an International community, everyone can relate. However, how evident is the expression of this amount of diversity expressed in our student community. Our first action as your student government will be to set-up an Ad-Hoc committee in the Ashesi Student Council which will serve and represent the international interests of the student body and the community at large. Days like the AU, UN, Independence of the different countries represented on the Ashesi campus and the like should be well represented on campus. The student government will not be left out in this vision of inclusion and diversity. Every committee on the ASC will an international representation.</p>


					<p class="text-justify">
						We need a campus life that never sees a dull moment. In light of this, the task of bringing fun and engaging events will not be left on the shoulders of just the Entertainment committee. There will be a structure in place where committees come together to organize engaging fun campus-wide activities.
With respect to the different committees present in the student government, kindly find the outlined vision for these various committees below.</p>

					<p><strong>Ad Hoc International Community Committee</strong></p>
					<ul>
						<li>A committee which is representative of every country in the Ashesi community</li>
						<li>This committee will be tasked with recognizing all international events for every semester and will plan towards these events each semester</li>
						<li>The President of the International Student Association automatically becomes the chairperson of the committee</li>
						<li>A budget will be submitted by the committee to the finance committee at the start of the semester</li>
					</ul>

					<p><strong>Ashesi Student Scholarship Fund Managers</strong></p>
					<ul>
						<li>A vibrant group of members from every year group to actively raise funds for the ASSF and coordinate all activities of the Fund in regard to investments and growth</li>
						<li>Organizing one fundraiser each semester</li>
						<li>Making ASC paraphernalia to help raise funds to grow the fund</li>
					</ul>

					<p><strong>Welfare Committee</strong></p>
					<ul>
						<li>Liaising with the ASC cafeteria to organize some International food at least once every other week directed by the Ad-Hoc International Community Committee</li>
						<li>Improving on the variety of food in the cafeteria</li>
						<li>Conduct periodic (twice a semester) meeting to talk over student welfare with the stakeholders eg OSCA ,ARKONOR , OPERATIONS</li>
						<li>Collaboration with the RA’s to ensure effective service to the students</li>
					</ul>

					<p><strong>Sports Committee</strong></p>
					<ul>
						<li>Ashesi Marathon (Sponsored Run)</li>
						<li>Beginning talks to establish a “Student athlete program” in light of the upcoming sports complex. A student athlete program is a program for sports athletes on teams who combine their commitment to a sports team(s) as well as their academics and as such have one or a mix of these sports earn a that student either a full credit or a half credit</li>
						<li>AFA awards night: Ballon D’’or with invited guests, sports personality to be a guest speaker. Collaborate with the stakeholders in the industry eg.Kwaku Arhin concerning sports in general in Ashesi</li>
						<li>Basketball League draft night, Awards Nights, All Star Weekend</li>
						<li>Badminton Bout, bi-weekly table tournament and volleyball tournaments</li>
					</ul>

					<p><strong>Off-Campus Committee</strong></p>
					<ul>
						<li>Partnering with FDE student led venture Usafiri to reduce the cost of leaving school to town by paying a portion of it for students on certain weekends</li>
						<li>Collaborate with the academic committee and CS department to create a low-cost app that allows students to carpool to go out of town with a sizeable money.</li>
						<li>"KEEP YOUR CAMPUS TIDY" initiative to ensure that the roads Off-Campus are neat at all times</li>
						<li>ASC account credentials should be well documented and should be available even for the next team.</li>
						<li>Create an “Ashesi Cloud” that stores all current and forthcoming programs and events in Ashesi. This is to keep all students up-to-date and at par with campus activities. This will be made available to the entire student body.</li>
						<li>A PR committee rep will be put on each of the other committees to ensure proper and efficient communication of ASC committee events</li>
					</ul>

					<p><strong>Public Relations</strong></p>
					<ul>
						<li>Use the PR Committee as an avenue to grow skills of those interested, e.g. use their skills in showcasing student life on campus through photography, videography, blog posts, etc</li>
						<li>A well-structured PR Committee where each and every member will have a designated role and deliverables to ensure efficiency</li>
						<li>Use the social media platforms to provide “ASC News” which would outline upcoming events prior to the dates</li>
						<li>ASC account credentials should be well documented and should be available even for the next team.</li>
						<li>Create an “Ashesi Cloud” that stores all current and forthcoming programs and events in Ashesi. This is to keep all students up-to-date and at par with campus activities. This will be made available to the entire student body.</li>
						<li>A PR committee rep will be put on each of the other committees to ensure proper and efficient communication of ASC committee events</li>
					</ul>


					<p><strong>Outreach Committee</strong></p>
					<ul>
						<li>Publish a booklet (either hardcopy or softcopy) on all Civic engagement groups on campus, their current heads and other relevant information.</li>
						<li>A well-structured PR Committee where each and every member will have a designated role and deliverables to ensure efficiency</li>
						<li>Civic Engagement Day, a day where civic engagement groups would set up stations all over campus to show what they do as a group and not just talk about them.</li>
						<li>Outreach Day for the entire Ashesi campus, especially the classes 2021 and 2022, where students get to experience the life of the less privileged (Blind, mentally challenged, etc)</li>
						<li>One major Community engagement event, where the entire ashesi community would come together to impact the life of a certain community or help out in a way.</li>
					</ul>


					<p><strong>Entertainment Committee</strong></p>
					<ul>
						<li>Movie night-instead of regular parties where a survey is sent and the most voted for movies are projected in the perfect movie night setting. Cushions, pillows, Cotton candy, popcorn, hot dogs, drinks and many more.</li>
						<li>Hanging L’s to promote inclusivity. literally every student and staff’s names are hanged throughout the school and once a person’s name is found, he or she earns a prize. It’s a game of chance where prizes range from pizza, cupcakes, pencils, sharpeners.</li>
						<li>Merge with another school’s entertainment committee and see how the entertainment life between schools vary or are similar. Again, a survey to know if they want to go to these schools in question or want them to come to us.</li>
						<li>Merge with Sports Committee to have a grand aerobics and dance session with both a professional aerobics instructor and dance instructor. To help break the boredom in trying to keep fit while learning new dance skills in the process.</li>
						<li>More Lively ASC Week: The introduction of an Animated Monday - dressing like your favorite cartoon character. Hellenistic Day (Days of Moses) and many more</li>
					</ul>

					
					<br>

					<p class="text-justify">
						Finally, we believe in engaging in healthy discourse since we all aim for a better Ashesi. We encourage the entire student body to be free to voice out your opinions to us, and to any of the other ASC executives or committee members. In light of that, there will be an open half semester review of the committees to the entire student body and budget reallocation where necessary. There would also be Ashesi “Decaf & Sandwich” sessions where students praise, complain and brainstorm ways to fix issues raised.</p>

						<p class="text-justify">
						It is time to realize it is all about YOU! if this is what you want, if this is what you believe in, you must Vote Edwin Adatsi and Benjamin Annan for the Ashesi community we ALL envision.</p>

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

				displayComments();

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