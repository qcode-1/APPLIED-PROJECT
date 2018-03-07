
<?php

require_once('dbConnection.php');

date_default_timezone_set('UTC');


function test_input($dat) {
	$data = trim($dat);
	$data = stripslashes($dat);
	$data = htmlspecialchars($dat);
	return $dat;
}


function loadMajors() {

	$datbconn = new datbconnection();
	$que = "SELECT * FROM majors";
	$result = $datbconn->query($que);

	if ($result) {

		while ($row = $datbconn->fetchArray()) {
			echo "<option value=" . $row['major_id'] . ">" . $row['major_group'] ."</option>";
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
				$fn = str_replace(' ', '', $row['firstname']);
				$_SESSION['user'] = strtolower($fn . "." . $row['lastname']);
				header ("Location: home.php");  				//starts a session and returns homepage
			}
			else {
				$message = "Username and/or Password incorrect.\\nTry again.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}

		else {

			$message = "Connection could not be established!\\nTry again.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}


	function logout() {
		session_start();
		session_destroy();
		if (session_destroy()) {
			header("Location: ../index.php");
		}

	}


	function insertComment() {

		if (isset($_POST['anonCheck'])) {
			$username = "Anon";
		}
		else {
			$username = $_POST['user'];
		}
		$datetime = $_POST['datetime'];
		$comment = $_POST['commnt'];

		$dbconn = new datbconnection();
		$query = "INSERT INTO usercomment (user, comment_datetime, comment) VALUES ('$username', '$datetime', '$comment')";
		$addC = $dbconn->query($query);

		if ($addC) {
			echo "<script type='text/javascript'> alert(\"COMMENT ADDED\"); </script>";
		}

		else {
			echo "<script type='text/javascript'> alert(\"COULD NOT BE ADDED\"); </script>";
		}		

	}



	function displayComments() {


		$dbconn = new datbconnection();
		$query = "SELECT user, comment_datetime, comment FROM usercomment";
		$addC = $dbconn->query($query);

		if ($addC) {

			while ($rows = $dbconn->fetchArray()) {

				if ($rows) {
					echo "<div class=\"commentsection\">
					<p><span class=\"float-left\"> " .$rows['user']. " </span> <span class=\"font-weight-light float-right\">" .$rows['comment_datetime']. "</span></p>
					<br>
					<p class=\"float-left\">" .$rows['comment']. "</p>
					</div>

					<br>
					<br>";
				}

			}
		}

	}

	?>


