
<?php

require_once('dbConnection.php');


function test_input($dat) {
	$data = trim($dat);
	$data = stripslashes($dat);
	$data = htmlspecialchars($dat);
	return $dat;
}


function loadClasses() {

	$datbconn = new datbconnection();
	$que = "SELECT * FROM classes";
	$result = $datbconn->query($que);

	if ($result) {

		while ($row = $datbconn->fetchArray()) {
			echo "<option value=" . $row['year_id'] . ">" . $row['year_group'] ."</option>";
		}
	}
}


//reisters new admin
function registerStudent() {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$yr = $_POST["class"];
		$email = $_POST["eml"];
		$passwrd = $_POST["passd"];

		test_input($fname);
		test_input($lname);

			//inserts data in db with query parameters
		$database = new datbconnection();
		$passhash = password_hash($passwrd, PASSWORD_BCRYPT);
		$query = "INSERT INTO student(firstname,lastname,year_group,email,password) VALUES('$fname','$lname','$yr', '$email', '$passhash')";
		$reg = $database->query($query);


		if ($reg) {
			$msg = "Registration could not be completed. \\nTry again.";
			echo "<script type='text/javascript'>alert('$msg');</script>"; 
				header ("Location: view/login.php"); //if successful , return index page
			}
			else {
				$msg = "Registration could not be completed. \\nTry again.";
				echo "<script type='text/javascript'>alert('$msg');</script>"; //return an alert message if unsuccessful
			}
		}
	}


	function changePassword($email, $pass) {

		$datbconn = new datbconnection();
		$que = "SELECT email FROM student where email = '$email'";
		$result = $datbconn->query($que);

		if ($result && $datbconn->getNumRows() > 0) {

			$passd = password_hash($pass, PASSWORD_BCRYPT);
			$que = "UPDATE student SET passwrd = $passd WHERE email = '$email'";
			$result = $datbconn->query($que);
		}
	}


	//function to verify user details before login
	function loginStudent($email, $pwrd) {
		
		$dbconn = new datbconnection();
		$query = "SELECT * FROM student WHERE ( email = '$email' OR password = '$pwrd')";


		$result = $dbconn->query($query);
		$row = $dbconn->fetchArray();
		$passd = $row['password'];

		if ($result) {

			if(password_verify($pwrd, $passd)){ 					//verifies string password against hashed password in db
				session_start();
				$_SESSION['id'] = $row['student_id'];
				$_SESSION['user'] = $row['firstname'] . "." . $row['lastname'] ; 
				header ("Location: home.php");  				//starts a session and returns homepage
			}
			else {
				$message = "Username and/or Password incorrect.\\nTry again.";

				// $message = "
				// <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
				// <div class=\"modal-dialog\" role=\"document\">
				// <div class=\"modal-content\">
				// <div class=\"modal-header\">
				// <h5 class=\"modal-title\" id=\"exampleModalLabel\">Login Unsuccessful</h5>
				// <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
				// <span aria-hidden=\"true\">&times;</span>
				// </button>
				// </div>
				// <div class=\"modal-body\">
				// Email or password may be wrong. Try again!
				// </div>
				// <div class=\"modal-footer\">
				// <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
				// </div>
				// </div>
				// </div>
				// </div>";
				echo "<script type='text/javascript'>alert('$message');</script>";
				// echo $message;
			}
		}

		else {

			$message = "Connection could not be established!\\nTry again.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}





	?>