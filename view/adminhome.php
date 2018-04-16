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

	

	<title>Admin - ASCVigil&trade;</title>
</head>
<body>

	<?php

	require_once("../database/process.php");


	if (isset($_POST['addCommittee'])) {
		addCommittee();
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
					<a class="nav-link" href="home.php">ADMIN<span class="sr-only">(current)</span></a>
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


	<!-- <div class="container"> -->

		<div class="row">

			<div class="col-3">
				
				<div id="accordion">
					<div class="card">
						<div class="card-header bg-info text-white" id="headingOne">
							<h5 class="mb-0">
								<button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Collapsible Group Item #1
								</button>
							</h5>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
								<ul>
									
									<li>Go To Polls</li>
									<li>View Polls</li>
									<li>See Poll Results</li>
									<li>End Poll</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header bg-info text-white" id="headingTwo">
							<h5 class="mb-0">
								<button class="btn btn-link collapsed  text-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Collapsible Group Item #2
								</button>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header bg-info text-white" id="headingThree">
							<h5 class="mb-0">
								<button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Collapsible Group Item #3
								</button>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-1">

				<br>
				
			</div>

			


			<div class="col-8">

				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active text-info" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Polls</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-info" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Committees</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-info" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
					</li>
				</ul>

				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<p>There are three ongoing polls.</p>
					</div>

					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

						<p>There are currently <?php echo committeeCount();   ?> arms of the government.</p>

						<button type="button" id="addCommbtn" class="btn btn-outline-info">Add Committee</button>
						<button type="button" id="editCommbtn" class="btn btn-outline-info">Edit Committee</button>
						<br><br>

						<div>
							<div id="addComms" class="card text-white bg-info mb-3" style="max-width: 50rem;">
								<div class="card-header">Add Committee</div>
								<div class="card-body">
									<!-- <h5 class="card-title">Info card title</h5> -->
									<form method="POST">
										
										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label">Committee Name</label>
											<div class="col-sm-10">
												<input type="text" class="form-control"  name="comm_name" id="inputCommname" value="<?php echo isset($_POST['comm_name']) ? $_POST['comm_name'] : ''; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label">Committee Head</label>
											<div class="col-sm-10">
												<input type="text" class="form-control"  name="comm_head" id="inputCommname" value="<?php echo isset($_POST['comm_head']) ? $_POST['comm_head'] : ''; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label">Description</label>
											<div class="col-sm-10">
												<textarea class="form-control" name="comm_text" id="commentText" rows="3"></textarea>
											</div>
										</div>
										<button type="submit" name="addCommittee" class="btn btn-light">Add</button>
									</form>
								</div>
							</div>
						</div>



						<div>
							<div id="editComms" class="card text-white bg-info mb-3" style="max-width: 50rem;">
								<div class="card-header">Edit Committee</div>
								<div class="card-body">
									<!-- <h5 class="card-title">Info card title</h5> -->

									<form method="POST">
										<div class="form-group row">
											<label for="" class="col-sm-2">Select Committee</label>
											<div class="col-sm-10">
												<select class="form-control" name="comm" id="inputComms" >
													<?php loadCommittees(); ?>
												</select>
											</div>
										</div>

										<div id ="commdetails">

										</div>
									</div>
								</div>



							</div>
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...
							</div>

						</div>
					</div>

				</div>

			</div>

			<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    </div>
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

			<script type="text/javascript">

				$(document).ready(function(){
					$("#addComms").hide();
					$("#editComms").hide();

					$("#addCommbtn").click(function(){
						$("#editComms").hide();
						$("#addComms").show();
					});

					$("#editCommbtn").click(function(){
						$("#addComms").hide();
						$("#editComms").show();
					});
				});

			</script>



			<script type="text/javascript">

				$(document).ready(function(){

					$('#inputComms').on('change', function() {

						var cmt_id = $(this).val();

						if (cmt_id) {

							$.ajax({
								url: "../controller/loadCommdata.php",
								method: "POST",
								data: {cmt_id: cmt_id},
								success: function(data) {
									$('#commdetails').html(data);
								},
								failure: function(err){
									alert(err);
								}
							});
						}
					});
				});



			</script>



		</body>
		</html>