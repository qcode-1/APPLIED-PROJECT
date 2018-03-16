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

	

	<title> Welcome, <?php  session_start();
	echo $_SESSION['user'];?> - ASCVigil&trade;</title>
</head>
<body>

	<?php

	require_once("../database/process.php");

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

			<div class="w-100">

				<br>
				
			</div>

			<div class="col-3">
				<div class="nav flex-column nav-pills sidebar" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">Message from ASC President &amp; Vice</a>
					<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Committees &amp; Executives</a>
					<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">ASC History</a>
				</div>
			</div>


			<div class="col-7">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
						<h3>Message From The ASC President</h3>
						<p class="text-justify">My journey of a thousand miles began with my first step to fill out my Ashesi application form. Today, I stand humbled to be the President of the Ashesi Student Council. This journey continues with a solid and capable team of result-oriented thinkers who stand out with excellence and zeal to lead the executive council. It’s all about the student body and we, the Executive Council of the ASC have made it our sole mission to serve students and create the college experience we all yearn for.
					That experience will be characterized by an inclusive and vibrant campus which brings to light the beauty of our diverse campus. This same experience will see a very transparent ASC which is open to suggestions and ever ready to engage in a conversation. It is all about US, the student body. It is all about the student’s needs. It is all about our college experience.</p>
					<p><strong>- Edwin Adatsi '19</strong></p></div>


					<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

						<p><strong>Edwin Adatsi</strong></p>
						<span>ASC President</span>
						<hr>
						<p class="text-justify">“Be nothing, lest it be lasting” this has been the grounding principle of the current ASC president, Edwin Adatsi. Edwin is a junior who is currently studying Computer Engineering in Ashesi University. Edwin believes every act should be motivated by the greater good of a lasting and impactful effect. From his time in first year, Edwin served as the Communication Head of Pencils of Promise Club which has the sole objective of improving access to education all over the world. Through several projects and engagement, the students of Berekuso and Adaklu-Sofa have felt the impact of the club’s objective. He currently heads the club with a fellow student. With a developing knack for public speaking, Edwin and six other students represented Ashesi in the 64th edition of the Harvard National Model United Nations where he represented Uruguay’s interests.
							Edwin enjoys playing basketball and cooking.
						In his role as the new ASC president, his teams’ primary objective is to create an entirely independent and collaborative student body, with a vibrant campus outlook. An outlook which should be nothing but lasting.</p>
						<p>
							<span><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="presidentFeedbackform.php">Write Feedback</a></span>
						</p>
						<br>


						<p><strong>Benjamin Annan</strong></p>
						<span>Vice President</span>
						<hr>
						<p class="text-justify">Benjamin Annan, a Mechanical Engineering major of the Ashesi class of 2019 is best described as a politician at heart and an engineer in mind. Since enrolling in Ashesi in the Fall of 2015, he has previously served as the Fund manager of the Ashesi Student Scholarship Fund (ASSF). He currently holds the position of Programs Manager of Kingdom Christian Fellowship (KCF), and doubles as a Career Peer Advisor with the Career Center. As Vice-President of the Ashesi Student Council his primary aim is to build a firm fundamental structure with professionalism to the Student Council. He aspires to become a politician in a few years. He believes Engineers make the best leaders and the best of every profession and pledges to do whatever he can to contribute his quota because Ashesi is one of God’s great gifts to Africa.</p>
						<p>
							<span><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="vicepFeedbackform.php">Write Feedback</a></span>
						</p>
						<br>

						<p><strong>Kwasi Korboe</strong></p>
						<span>Academic Committee Chairperson</span>
						<hr>
						<p class="text-justify">Kwasi Korboe is a junior studying Business Administration. Since the tender age of ten, he has loved taking part in various experiences and engaging with people. As a result, he lives by the mantra, “Life is an Experience”. He has engaged in many projects since entering Ashesi and hopes to take part in more in the future. He led a team of students to attend the Harvard National Model United Nations 2017 and has worked at two reputable petroleum companies. He is currently a Career Peer Advisor educating students on how to develop their careers, and he works with different social enterprises such as 19 Ambassador Integrity Campaign to give back to his society.
						Having served on the Academic Committee in his first year, Kwasi hopes to make the committee more engaging to the students in the next year. By organizing interactive educational events, involving students in solving student problems and campaigning for decreased academic misconduct, Kwasi aims at making the Academic Committee an influential and important aspect of student life on campus.</p>
						<p>
							<span><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="academicFeedbackform.php">Write Feedback</a></span>
						</p>
						<br>


						<p><strong>Joseph-Peter Yoofi Brown-Pobee</strong></p>
						<span>Finance Committee Chairperson</span>
						<hr>
						<p class="text-justify">Yoofi Brown-Pobee'19 is the Finance Committee Chairperson of the Student Council and a Management Information Systems major. An alumnus of Tema International School, he immediately got into student government in his first year, joining the Sports and Finance Committees. He also joined the Ashesi D: Lab where he coordinated a cross university Design Project between Ashesi University and Brown University. He engaged in a similar project in 2017 this time with Dartmouth University and is currently a Design Lab Management Intern in charge of coordinating Hackathons that produce high impact solutions.
						He loves professional wrestling particularly WWE, is a Chelsea fan and thinks Breaking Bad and Prison Break are the best series ever made. He knows nothing about basketball (still thinks Kobe is 25 years). He loves banter and making jokes and really cherishes his friends and classmates. One thing he guarantees with this ASC is efficiency and diligence. You won't forget team.</p>
						<p>
							<span><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="financeFeedbackform.php">Write Feedback</a></span>
						</p>
						<br>


						<p><strong>Kofi Anamoa Mensah</strong></p>
						<span>Outreach Committee Chairperson</span>
						<hr>
						<p class="text-justify">Kofi Anamoa is a junior studying Electrical / Electronic Engineering. He enjoys teaching and helping others in whatever capacity he can. Serving on previous Outreach Committees since his freshman year, Kofi has developed a desire to foster a community that is socially and environmentally conscious.
							Kofi is a member of Tech Era, an organization that seeks to equip underprivileged Junior High School students with the necessary computing skills needed in this fast-growing technological era. There, he serves in the capacity of the Tech Module lead and manages student volunteer tutors, develop and manage the curriculum for teaching and learning in the most practical way possible.
						As the Outreach Committee Chairperson, Kofi looks forward to creating a conducive space where community engagement groups have the resources necessary to operate, as well as radiate the giving back spirit of the community.</p>
						<p>
							<span><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="outreachFeedbackform.php">Write Feedback</a></span>
						</p>
						<br>


						<p><strong>Kennedy Minta</strong></p>
						<span>Sports Committee Chairperson</span>
						<hr>
						<p class="text-justify">Kennedy expresses deep concerns to improve sports in Ashesi, and offer major attention towards the less patronized sports. He is an individual grounded on the principles of commitment and leadership. He was on the previous Sports Committee, and in the upcoming year hopes to further the remarkable work done by the outgoing team. Kennedy is currently the deputy captain for Kasanoma FC, an Ashesi Premier League club. Prior to Ashesi, he participated in the Danish Soccer Tournament, Dana Cup.
						He has fun when playing sports, and would encourage you to join his fun by showing up for all sports related activities on and off campus. Kennedy is an easily approachable individual and will welcome your ideas on how sports can be enhanced at Ashesi.</p>
						<p>
							<span><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="sportsFeedbackform.php">Write Feedback</a></span>
						</p>
						<br>


						<p><strong>Odette Ofosu-Siaw</strong></p>
						<span>Entertainment Committee Chairperson</span>
						<hr>
						<p class="text-justify">“when the music changes, so does the dance…” as such, it is time for entertainment to be turned up a notch. 
						Odette Ofosu-Siaw is currently a sophomore majoring in Business Administration and the ASC Entertainment Committee Chairperson. She finds delight in creating experiences by traveling the world, learning new things and meeting new people. She has previously served as an active member of the entertainment committee since her freshman year. In her tenure of office, she aspires to make the Ashesi community vibrant for students, staff, and faculty, to not only promote inclusion in Ashesi but have fun while doing so. For what shall it profit a man, to gain a 4.0 GPA with no college experience</p>
						<p>
							<span><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="entFeedbackform.php">Write Feedback</a></span>
						</p>
						<br>


						<p><strong>Elorm Dela-Brown</strong></p>
						<span>Off-Campus Committee Chairperson</span>
						<hr>
						<p class="text-justify">Elorm is a junior, a Business Administration major and an avid sportsman. He’s enthusiastic about welfare and being a part of fun occasions.
							There’s always one thing he’s kept close to heart and it’s that “life is but one”. Life is way too short, but God didn’t only give us 24 hours, He gave us time and he intends to use that meaningfully and its full capacity.
						As Off-Campus chairperson, he intends to explore the different fun opportunities that can engage as many students as possible regardless of your year group, nationality or residence. Stress is eminent here at Ashesi and fun can be the same too. I can’t do this without the cooperation of the student body, so I hope to see you all around. Remember, like me, never wake up without hope and sleep with disappointment. Just live, laugh and learn!</p>
						<p>
							<span><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="offcampusFeedbackform.php">Write Feedback</a></span>
						</p>
						<br>


						<p><strong>Wayne Gakuo</strong></p>
						<span>Head of Public Relations</span>
						<hr>
						<p class="text-justify">Wayne Gakuo is a social and outgoing student who hails from Mombasa, Kenya. His love for social media came when he just finished high school. As a tech-enthusiast and always thirsty for knowledge, he was constantly using online media to satisfy his curiosity; knowing what is trending and newly-introduced technological gadgets. Having been financially-sponsored in high school, and now in Ashesi University under the MasterCard Foundation Scholarship, Wayne loves community outreach programs since he feels he has an obligation to mentor the young ones from disadvantaged backgrounds. “Financial constraints should not bar people from gaining access to education”, he says. “There is unlimited and untapped potential that rests with these future leaders.”
						Wayne has been in the previous Public Relations Committee where he spearheaded the Ashesi Students Council’s social media team that saw 128% increase in the number of followers both on Instagram and Facebook. “I look forward to using my committee as a platform where students get to learn and sharpen their skills in photography, writing, cinematography and graphic designing”, he adds. “With this, the produced content will be used to showcase the lives of Ashesi students and magnify the image of the ASC”</p>
						<p>
							<span><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="prFeedbackform.php">Write Feedback</a></span>
						</p>
						<br>


						<p><strong>Zoe Delasi Tagboto</strong></p>
						<span>General Secretary</span>
						<hr>
						<p class="text-justify">Zoe Delasi Tagboto is a member of the Class of 2020 majoring in Computer Science. She is passionate about being an active member of student government. Since freshman year, she has been actively involved in extracurricular activities having the chance to interact with and learn about the various concerns of the student body. She was elected by her peers as the Academic Representative for the class of 2020 and is a Career Peer Advisor which gave her the drive to use the skills she developed to create change in Ashesi.

						As the ASC general secretary, she hopes to use her leadership and communication skills to improve student wellbeing and provide support to the other executive members as they carry out their duties. Her willingness to volunteer and work with different student groups, while maintaining a consistently high GPA attest to her strong organizational and time management skills and her ability to prioritize. She believes that this role would give her the ability to serve and protect the students by ensuring the members of the committee meet their deadlines and live out their promises.</p>
						<p>
							<span><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="gsFeedbackform.php">Write Feedback</a></span>
						</p>
						<br>

						<p><strong>Isatou Jallow</strong></p>
						<span>Welfare Chairperson</span>
						<hr>
						<p class="text-justify">Isatou is a MasterCard scholar, from the Gambia, studying Business Administration at Ashesi. She has diverse list of hobbies, from reading magazines, hanging out with kids, travelling, watching movies, public speaking, taking selfies, and always looking for new ways of innovation.

							She has been involved in a wide range of activities in Ashesi, from being a tutor for pre-calculus and foundation for design and entrepreneurship, to actively planning and engaging in school events such as orientations, club fairs, graduations, and elections.

							Also, she is a senior leader at Future of Africa (FOA), an NGO that advocates for the rights and dignity of street children in Accra through street outreaches that includes mentorship and other weekly programs.

							She has also had the privilege of serving on various boards in the Ashesi student council. Most of all, she takes pride in been part of the first student parliament in the school's history. She looks forward to serving Ashesi once again, as the Welfare Chairperson.

						In the end, she strongly believe the lives we touch, the destinies we redefine and the impacts we make will be what matters the most.</p>
						<p>
							<span><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="welfareFeedbackform.php">Write Feedback</a></span>
						</p>
						<br>

					</div>
					<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><h4>Please Visit The Ashesi Website for the Full <a class="text-secondary" href="http://www.ashesi.edu.gh/student-life-5/student-government/history-of-student-government.html">Ashesi Student Council Government History.</a></h4>

						<h5>Thank You.</h5></div>
				</div>
			</div>


			
			


		</div>
		

	</div>


	<!-- <div class="jumbotron jumbotron-fluid">
		<div class="container" style="text-align: center;">
			<h1 class="display-4">Sure &amp; Reliable Electoral Process</h1>
			<p class="lead">AshVigil&trade; seeks to bridge the gap between technology and the general elections. Our system will keep users up to date on all matters concerning election candidates and provide a swift means of voting. Results will be efficiently caluclated in real time, with the use of perfectly designed algorithms that are verifiable and accurate.</p>
		</div>
		<br>
		<div class="container" style="text-align: center;">
			<h1 class="display-4">Accountability &amp; Transparency</h1>
			<p class="lead">AshVigil&trade; goes the extra mile to ensure that our leaders are accountable and transparent in their actions. It creates the platform for discussion and delibration for issues pertaining to student governance and overall administation. </p>
		</div>
	</div> -->

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



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>