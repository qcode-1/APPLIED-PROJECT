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

	

	<title>
		
	Poll Result  - ASCVigil&trade;</title>
</head>
<body>
	<?php  

	session_start();
	require_once("../database/process.php");
	echo "<small  id=\"phidden\">";
	echo $_SESSION['pollID'];  
	echo "</small>";

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
						<a class="dropdown-item" href="caroldavidManifesto.php">Carol Armah &amp; David Sasu</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="elvisyasminManiesto.php" >Elvis Okoh-Asirifi &amp; Yasmin Alhassan</a>
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
		<h2 class="pollHead">Assess the Behavior and Attitude of the ASC President and Vice - Results</h2>
		<hr>
		<div class="row">
			<br>
			<div id="chartContainer"></div>
			<div id="surveyContainer"></div>
			<div id="surveyResult"></div>

			<small  id="ac"></small>
			<small  id="pr"></small>


			<div style="max-height: 800px; max-width: 800px;">
				<canvas id="myChart" width="500" height="500"></canvas>
			</div>


			<div style="max-height: 800px; max-width: 800px;">
				<canvas id="pieChart" width="500" height="500"></canvas>
			</div>

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
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="https://cdn3.devexpress.com/jslib/17.2.5/js/dx.all.js"></script>
	<script src="https://surveyjs.azureedge.net/1.0.13/survey.jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>


	<script type="text/javaScript">
	  // Initialize Firebase
	  var config = {
	  	apiKey: "AIzaSyA3Az4iL6IQ7njPUfGiG5WLbpTf4zwvid0",
	  	authDomain: "final-45892.firebaseapp.com",
	  	databaseURL: "https://final-45892.firebaseio.com",
	  	projectId: "final-45892",
	  	storageBucket: "final-45892.appspot.com",
	  	messagingSenderId: "839340408240"
	  };


	  firebase.initializeApp(config);

	    	var acad = 0;
	    	var press = 0;

	    	var cs = 0;
	    	var mgs = 0;
	    	var bus = 0;
	    	var enge = 0;
	    	var engm = 0;
	    	var engc = 0;
	    	var getReslt = firebase.database().ref().child('survey');

	    	function errData(error) {
			  console.log("Something went wrong.");
			  console.log(error);
			}

			function gotData(data) {
			  var surveys = data.val();
			  // Grab all the keys to iterate over the object
			  var keys = Object.keys(surveys);
			  console.log(keys)

			  // Loop through array
			  for (var i = 0; i < keys.length; i++) {
				 var key = keys[i];
				 var survey = surveys[key];
				
	    		var maj = survey.whatMajor

	    		if (maj == 'MIS') {
	    					mgs++;
	    		}
	    		else if (maj == 'CS') {
	    			cs++;
	    		}
	    		else if (maj == 'BA') {
	    			bus++;
	    		}
	    		else if (maj == 'EE') {
	    			enge++;
	    		}
	    		else if (maj == 'ME') {
	    			engm++;
	    		}
	    		else if (maj == 'CE') {
	    			engc++;
	    		}		
	    	  }	
	       }
	       var ref = firebase.database().ref().child('survey')
			ref.on("value", gotData, errData);
			
	    				
	    
	    	getReslt.on("child_added", snap => {

	    		var acadAssess = snap.child('academicAssessment').val();
	    		acad = acad + Number(acadAssess);
	    		var presAssess = snap.child('presidentAssessment').val();
	    		press = press + Number(presAssess);



	    		
	    		function getCount() {
	    			var count = 0;

	    			getReslt.on('value', function(snapshot) {
	    				snapshot.forEach(function() {
	    					count++;
	    				});
	    			});
	    			return count;
	    		}


	    		var ctx = document.getElementById("myChart").getContext('2d');
	    		var myChart = new Chart(ctx, {
	    			type: 'bar',
	    			data: {
	    				labels: ["ASC President", "Academic Committee"],
	    				datasets: [{
	    					label: 'Assessment of President and Academic Committee (Max rating: ' +(getCount()*5) +')',
	    					data: [acad, press],
	    					backgroundColor: [
	    					'rgba(255, 99, 132, 0.2)',
	    					'rgba(54, 162, 235, 0.2)'
	    					],
	    					borderColor: [
	    					'rgba(255,99,132,1)',
	    					'rgba(54, 162, 235, 1)'
	    					],
	    					borderWidth: 1
	    				}]
	    			},
	    			options: {
	    				scales: {
	    					yAxes: [{
	    						ticks: {
	    							beginAtZero:true
	    						}
	    					}]
	    				}
	    			}
	    		});

	    		var majorChart = document.getElementById("pieChart").getContext('2d');
	    		var majorData = {
	    			labels: ["CS", "MIS", "BA", "EE", "ME", "CE"],
	    			datasets: [{
	    				data: [cs, mgs, bus, enge, engm, engc],
	    				backgroundColor: ["#DEB887", "#0082c8", "#DC143C", "#603813", "#2E8B57", "#E39371"]
	    			}]
	    		};

	    		var pieChart = new Chart(majorChart, {
	    			type: 'pie',
	    			data: majorData
	    		});
	    	});



	    </script>


	</body>
	</html>