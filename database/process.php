
<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('dbConnection.php');


//Load composer's autoloader
//require_once ('../mailer/vendor/autoload.php');

date_default_timezone_set('UTC');


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
			echo "<option value=" . $row['class_id'] . ">" . $row['class_group'] ."</option>";
		}
	}
}


//reisters new admin
function registerStudent() {

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$yr = $_POST["classes"];
		$email = $_POST["emladd"];
		$passwrd = $_POST["passd"];

		test_input($fname);
		test_input($lname);

		//inserts data in db with query parameters
		$database = new datbconnection();
		$passhash = password_hash($passwrd, PASSWORD_BCRYPT);
		$query = "INSERT INTO student(firstname,lastname,year_group,email,password) VALUES('$fname','$lname','$yr', '$email', '$passhash')";
		$reg = $database->query($query);

		if ($reg) {
			header ("Location: view/login2.php"); //if successful , return index page
			$msg = "Registration successful. \\nTry again.";
			echo "<script type='text/javascript'>alert('$msg');</script>"; 
			}
			else {
				$msg = "Registration could not be completed. \\nTry again.";
				echo "<script type='text/javascript'>alert('$msg');</script>"; //return an alert message if unsuccessful
			}
		}
	}



	function checkValidEmail($email) {

		include('../mailer/vendor/autoload.php');
		$email = $_POST['eml'];

		$datbconn = new datbconnection();
		$que = "SELECT email FROM student where email = '$email'";
		$result = $datbconn->query($que);

		if ($result && $datbconn->getNumRows() > 0) {

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
    //Server settings
    //$mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'nii.quartey19@gmail.com';                 // SMTP username
    $mail->Password = 'Marktwain@1';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('nii.quartey19@gmail.com', 'ASCVigil');
    $mail->addAddress($email, '');     // Add a recipient

    $body = "<p><h4> Thank You for Using ASCVigil&trade;</h4></p>
    <p>You have requested to chnage your password. Please follow this link to <a href=\"http://localhost/Github/APPLIED-PROJECT/view/changePassword.php\">change your password</a>.</p>
    <p>Any Questions? Please login and leave your comments. Your feedback will be much appreciated.</p>

    <p>Kind Regards,</p>
    <p>The ASCVigil&trade; Support Team</p>";

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Change Your Password';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    //echo 'Message has been sent';
    header("Location: login.php");

} 


catch (Exception $e) {
    //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	echo "<script type='text/javascript'>alert('UNSUCCESSFUL');</script>";

}

}

else {
	$message = "This email does not exist.\\nEnter a valid email address.";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
}


function changePassword($email, $pass) {

	$datbconn = new datbconnection();
	$que = "SELECT password FROM student where email = '$email'";
	$result = $datbconn->query($que);

	if ($result) {

		$passd = password_hash($pass, PASSWORD_BCRYPT);
		$que = "UPDATE student SET password = '$passd' WHERE email = '$email'";
		$result = $datbconn->query($que);

		if ($result) {
			$message = "Password changed successfully.\\nTry again.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Location: login.php");
		}

		else {
			$message = "An error occured.\\nTry again.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
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


	function insertComment($pageid) {

		if (isset($_POST['anonCheck'])) {
			$username = "Anon";
		}
		else {
			$username = $_POST['user'];
		}
		$datetime = $_POST['datetime'];
		$comment = $_POST['commnt'];

		$dbconn = new datbconnection();
		$query = "INSERT INTO usercomment (comment_signature, user_id, comment_datetime, comment) VALUES ('$pageid', '$username', '$datetime', '$comment')";
		$addC = $dbconn->query($query);

		if ($addC) {
			echo "<script type='text/javascript'> alert(\"COMMENT ADDED\"); </script>";
		}

		else {
			echo "<script type='text/javascript'> alert(\"COULD NOT BE ADDED\"); </script>";
		}		

	}



	function displayComments($pageid) {


		$dbconn = new datbconnection();
		$query = "SELECT user_id, comment_datetime, comment FROM usercomment where comment_signature = '$pageid'";
		$addC = $dbconn->query($query);

		if ($addC) {

			while ($rows = $dbconn->fetchArray()) {

				if ($rows) {
					echo "<div class=\"commentsection\">
					<p><span class=\"float-left\"> " .$rows['user_id']. " </span> <span class=\"font-weight-light float-right\">" .$rows['comment_datetime']. "</span></p>
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


