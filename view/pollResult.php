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

	<link rel="stylesheet" type="text/css" href="../css/chart.css">

	<title>Poll Results - ASCVigil&trade;</title>
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
	</nav>


	<div class="container">

		<h2 class="pollHead">Assess the Behavior and Attitude of the ASC President and Vice</h2>

		<hr>

		<div class="row">

			<br>


			<!-- <div id='myChart'></div> -->

			<canvas id="myChart" width="400" height="400"></canvas>



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
	<!-- <script src= "https://cdn.zingchart.com/zingchart.min.js"></script> -->

	<!-- <script> 

		zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
		ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];

	</script> -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

	<script>

		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Red", "Blue", "Yellow",  "Green", "Purple", "Orange"],
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
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
	</script>

	<script type="text/javascript">


		// Survey
		// .StylesManager
		// .applyTheme("default");

		// var json = {
		// 	surveyId: 'c54c7faa-3ce2-48a1-b0c5-a0e6338e8b0a'
		// };

		// window.survey = new Survey.Model(json);

		// survey
		// .onComplete
		// .add(function (result) {
		// 	document
		// 	.querySelector('#surveyResult')
		// 	.innerHTML = "result: " + JSON.stringify(result.data);
		// });

		// $("#surveyElement").Survey({model: survey});


		// zingchart.render({ 
		// 	id : 'myChart', 
		// 	output:"svg",
		// 	dataurl : "//demos.zingchart.com/view/CN1B44PW/chart.json",
		// 	height : "100%", 
		// 	width: "100%" 
		// });


	</script>


</body>
</html>