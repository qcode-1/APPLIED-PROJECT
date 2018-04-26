
<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('dbConnection.php');
require_once('forumDatabase.php');


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
		$fn = str_replace(' ', '', $fname);
		$usn = strtolower($fn . "." . $lname);

		test_input($fname);
		test_input($lname);

		//inserts data in db with query parameters
		$database = new datbconnection();
		$passhash = password_hash($passwrd, PASSWORD_BCRYPT);
		$query = "INSERT INTO student(firstname,lastname,username,year_group,email,password) VALUES('$fname','$lname','$usn','$yr', '$email', '$passhash')";
		$reg = $database->query($query);

		if ($reg) {
			echo "<div class=\"alertSuccess alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Registration Successful.</div>";
			header ("Location: view/login2.php"); //if successful , return index page
		}
		else {
			echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Registration Failed. Please try again later.</div>";
			header("Refresh:1");
		}
	}
}

	// $passhash = password_hash("restrictedaccess", PASSWORD_BCRYPT);
	// echo $passhash;



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
	    $mail->Password = 'MARKTWAIN@!';                           // SMTP password
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
	    $mail->Subject = 'ASCVigil | Change Your Password';
	    $mail->Body    = $body;
	    $mail->AltBody = strip_tags($body);

	    $mail->send();
	    //echo 'Message has been sent';
	    header("Location: login2.php");
	}


	catch (Exception $e) {
    //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Please try again.</div>";
		header("Refresh:1");

	}

}

else {
	echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">This email does not exist.\\nEnter a valid email address</div>";
	header("Refresh:1");
}
}


function getUserCount() {

	$datbconn = new datbconnection();
	$que = "SELECT * FROM student";
	$result = $datbconn->query($que);
	$count = $datbconn->getRows();

	echo $count;

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
			echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Password changed successfully.\\nTry again.</div>";
			header("Location: login.php");
		}

		else {
			echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">An error occured.\\nTry again.</div>";
			header("Refresh: 2");
		}
	}
}


function showFeedback() {

	$db = new datbconnection();
	$query = "SELECT feedback.email_address, committee.comm_name, committee.comm_id, feedback.feedback_text, feedback.commt_id FROM committee INNER JOIN feedback ON committee.comm_id = feedback.commt_id";
	$res = $db->query($query);

	if ($res) {

		while ($row = $db->fetchArray()) {
			echo '<tr class="gradeA">
			<td>' . $row['email_address'] .'</td>
			<td >' . $row['comm_name'] .'</td>
			<td >' . $row['feedback_text'] .'</td>
			<td><button type="submit" name="addCommittee" class="btn btn-default">Reply</button></td>
			</tr>';
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

		if ($email == 'admin@ascvigil.com') {

			if(password_verify($pwrd, $passd)){ 					//verifies string password against hashed password in db
				session_start();
				$_SESSION['id'] = $row['student_id'];
				$_SESSION['user'] = $row['username'];
				$_SESSION['pollID'] = $row['student_id'];
				$_SESSION['usremail'] = $email;
				header ("Location: admin.php");  				//starts a session and returns homepage
			}

			else {
				echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Username and/or Password incorrect.\\nTry again.</div>";
				header("Refresh: 2");
			}
		}

		else {
			if(password_verify($pwrd, $passd)){ 					//verifies string password against hashed password in db
				session_start();
				$_SESSION['id'] = $row['student_id'];
				$_SESSION['user'] = $row['username'];
				$_SESSION['pollID'] = $row['student_id'];
				$_SESSION['usremail'] = $email;
				header ("Location: home.php");  				//starts a session and returns homepage
			}
			else {
				echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Username and/or Password incorrect.\\nTry again.</div>";
				header("Refresh: 2");
			}
		}
	}

	else {
		echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Failed.\\nTry again.</div>";
				header("Refresh: 2");
	}

}


function logout() {
	session_start();
	session_destroy();
	if (session_destroy()) {
		header("Location: ../index.php");
	}

}


function loadFeedbackPage() {

	$dbconn = new datbconnection();
	$query = "SELECT * FROM committee";
	$result = $dbconn->query($query);

	if ($result) {
		while ($row = $dbconn->fetchArray()) {
			$_SESSION['cmid'] = $row['comm_id'];
			echo "<p><strong>" . $row['comm_headName'] . "</strong></p>
			<span>" . $row['comm_name'] . "</span>
			<hr>
			<p class=\"text-justify\">" . $row['comm_desc'] . "</p>
			<p>
			<span><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i><a href=\"feedbackform.php?pgID=" . $row['comm_id'] . "\">Write Feedback</a></span>
			</p>
			<br>";
		}
	}
	else {
		echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Failed to load page. Please try again later.</div>";
		header("Refresh:2");
	}
}



function loadFeedbackForm($id) {

	$dbconn = new datbconnection();
	$qry = "SELECT comm_name, comm_id FROM committee where comm_id = '$id' ";
	$result = $dbconn->query($qry);

	if ($result) {

		while ($row = $dbconn->fetchArray()) {
			echo '<h3>Feedback Form - ' . $row['comm_name'] .'</h3>
			<form method="POST">
			<div class="form-group">
			<label for="exampleFormControlInput1">Email address</label>
			<input type="email" class="form-control" name="userEmail" id="exampleFormControlInput1" value="' . $_SESSION['usremail'] . '" placeholder="your email address">
			</div>

			<div class="form-group">
			<label for="exampleFormControlTextarea1">Your comments</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" name="response" rows="3" placeholder="add comments.."></textarea>
			</div>
			<button type="submit" name="addfeed" class="btn btn-primary mb-2">Submit</button>
			</form>';
		}
	}
	else {
		echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Failed to load forms. Please try again later.</div>";
		header("Refresh:2");
	}
}


function addFeedback($comt_id) {

	$fid = '';
	for($i = 0; $i < 3; $i++) {
		$fid .= mt_rand(0, 9);
	}
	$fid = "fb".$fid;

	$eml = $_POST['userEmail'];
	$resp = $_POST['response'];

	$db = new datbconnection();
	$query = "INSERT INTO feedback (feedback_id, email_address, commt_id, feedback_text) VALUES ('$fid', '$eml', '$comt_id', '$resp')";
	$result = $db->query($query);

	if ($result) {
		echo "<div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">
		Your feedback has been collected. Thank You.
		</div>
		<p style=\"text-align: center;\">Return To <a class=\"text-secondary\" href=\"committee.php\">Committee Page.</a></p>";
	}

	else {
		echo "<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">
		Failed to send feedback. Please try again later.
		</div>
		<p style=\"text-align: center;\">Return To <a class=\"text-secondary\" href=\"committee.php\">Committee Page.</a></p>";
	}
}


function loadCommittees() {

	$db = new datbconnection();
	$query = "SELECT * FROM committee";
	$result = $db->query($query);

	if ($result) {

		while ($row = $db->fetchArray()) {
			echo "<option value=" . $row['comm_id'] . ">" . $row['comm_name'] ."</option>";
		}

	}

	else {
		echo "<script type='text/javascript'> alert(\"Failed to load. Reload page.\"); </script>";
	}


}


function committeeCount(){

	$db = new datbconnection();
	$query = "SELECT * FROM committee";
	$result = $db->query($query);
	$numResults = $db->getRows();

	return $numResults;
}


function addCommittee() {

	$cm_name = $_POST['comm_name'];
	$cm_head = $_POST['comm_head'];
	$cm_descrip = $_POST['comm_text'];

	$db = new datbconnection();
	$query = "INSERT INTO committee (comm_name, comm_headName, comm_desc) VALUES ('$cm_name', '$cm_head', '$cm_descrip')";
	$result = $db->query($query);

	if ($result) {
		echo "<div class=\"alertSuccess alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">New Committee Added.</div>";
		header("Refresh:2");
	}
	else {
		echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Failed. Please try again later.</div>";
		header("Refresh:2");
	}
}


function updateCommData() {

	$cm_id = $_POST['cmID'];
	$cm_name = $_POST['comm_name'];
	$cm_head = $_POST['comm_head'];
	$cm_desc = $_POST['comm_descp'];

	$dbconn = new datbconnection();
	$query = "UPDATE committee SET comm_name = '$cm_name', comm_headName = '$cm_head', comm_desc = '$cm_desc' WHERE comm_id = '$cm_id' ";
	$success = $dbconn->query($query);

	if ($success) {
		echo "<div class=\"alertSuccess alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Commmittee Details Updated.</div>";
		header("Refresh:1");
	}

	else {
		echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Failed. Please try again later.</div>";
		header("Refresh:1");
	}
}



function insertComment($pageid) {

	if (isset($_POST['anonCheck'])) {
		$username = "anon";
	}
	else {
		$username = $_POST['user'];
	}
	$datetime = $_POST['datetime'];
	$comment = $_POST['commnt'];

	$dbconn = new datbconnection();
	$query = "INSERT INTO usercomment (comment_signature, username, comment_datetime, comments, status) VALUES ('$pageid', '$username', '$datetime', '$comment', 'false')";
	$addC = $dbconn->query($query);

	if ($addC) {
		echo "<div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">
		Your comment has been added and is under review. Thank You.
		</div>";
	}

	else {
		echo "<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0;\" id=\"alertSuccess\">
		Unable to add your comment. Please try again later.
		</div>";
	}		

}

function randomNumber() {
	$result = '';

	for($i = 0; $i < 4; $i++) {
		$result .= mt_rand(0, 9);
	}

	echo "stu".$result;
}


function displayComments($pageid) {

	$dbconn = new datbconnection();
	$query = "SELECT comment_id, username, comment_datetime, comments FROM usercomment where comment_signature = '$pageid' AND status = 'true' ORDER BY comment_datetime DESC, comment_id DESC";
	$addC = $dbconn->query($query);
	$count = $dbconn->getRows();

	if ($addC) {

		echo "<span><h4>Comments Section</h4><small class=\"font-weight-bold\">". $count ." Comments</small></span>";

		while ($rows = $dbconn->fetchArray()) {

			if (getDatediff($rows['comment_datetime']) == 0) {

				echo '<div class="card border-dark mb-3" style="">
				<div class="card-header"><p><span class="float-left"> ' .$rows['username']. ' </span> <small class="font-weight-light float-right">today</small></p></div>
				<div class="card-body text-dark">
				<p class="card-text">'.$rows['comments'].'</p>
				</div>
				</div>';

			}

			else if (getDatediff($rows['comment_datetime']) == 1) {

				echo '<div class="card border-dark mb-3" style="">
				<div class="card-header"><p><span class="float-left"> ' .$rows['username']. ' </span> <small class="font-weight-light float-right">' .getDatediff($rows['comment_datetime']). ' day ago</small></p></div>
				<div class="card-body text-dark">
				<p class="card-text">'.$rows['comments'].'</p>
				</div>
				</div>';

			}

			else {

				echo '<div class="card border-dark mb-3" style="">
				<div class="card-header"><p><span class="float-left"> ' .$rows['username']. ' </span> <small class="font-weight-light float-right">' .getDatediff($rows['comment_datetime']). ' days ago</small></p></div>
				<div class="card-body text-dark">
				<p class="card-text">'.$rows['comments'].'</p>
				</div>
				</div>';
			}

		}
	}
}


function addNotes() {

	$title = $_POST['noteTitle'];
	$text = $_POST['note_text'];

	$dbconn = new datbconnection();
	$query = "INSERT INTO notes (note_title, note_text) VALUES ('$title', '$text')";
	$result = $dbconn->query($query);

	if ($result) {
		echo "<div class=\"alertSuccess alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Note Added.</div>";
		header("Refresh:2");
	}

	else {
		echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Failed. Please try again later.</div>";
		header("Refresh:2");
	}

}


function displayNotes() {

	$dbconn = new datbconnection();
	$query = "SELECT * FROM notes";
	$result = $dbconn->query($query);
	$count = 0;

	if ($result) {

		while ($row = $dbconn->fetchArray()) {

			if ($count % 2 == 0) {

				echo '<li>
				<div class="timeline-badge info"><i class="fa fa-pencil"></i>
				</div>
				<div class="timeline-panel">
				<div class="timeline-heading">
				<h4 class="timeline-title">' . $row['note_title'] .'</h4>
				</div>
				<div class="timeline-body">
				<p>' . $row['note_text'] .'</p>
				<hr>
				<div class="btn-group">
				<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-gear"></i> <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
				<li><a href="../database/delNote.php?notID=' . $row['note_id'] . '">Delete</a>
				</li>
				</ul>
				</div>
				</div>
				</div>
				</li>';
				$count++;

			}

			else {

				echo '<li class="timeline-inverted">
				<div class="timeline-badge warning"><i class="fa fa-pencil"></i>
				</div>
				<div class="timeline-panel">
				<div class="timeline-heading">
				<h4 class="timeline-title">' . $row['note_title'] .'</h4>
				</div>
				<div class="timeline-body">
				<p>' . $row['note_text'] .'</p>
				<hr>
				<div class="btn-group">
				<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-gear"></i> <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
				<li><a href="../database/delNote.php?notID=' . $row['note_id'] . '">Delete</a>
				</li>
				</ul>
				</div>
				</div>
				</div>
				</li>';
				$count++;
			}
		}

	}

	else {
		echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Failed to load notes. Please try again later.</div>";
		header("Refresh:2");
	}

}


function checkComment() {

	$db = new datbconnection();
	$query = "SELECT * FROM usercomment";
	$res = $db->query($query);

	if ($res) {

		while ($row = $db->fetchArray()) {
			echo '<tr class="gradeA">
			<td>' . $row['comment_id'] .'</td>
			<td >' . $row['comment_signature'] .'</td>
			<td >' . $row['username'] .'</td>
			<td>' . $row['comments'] .'</td>
			<td>' . $row['status'] .'</td>
			
			</tr>';
		}
	}

}


function optIN($id) {

	$email = $_POST['subEmail'];

	$db = new datbconnection();
	$query = "INSERT INTO subscription (user_id, user_email) VALUES ('$id', '$email')";
	$res = $db->query($query);

	if ($res) {
		echo "<div class=\"alertSuccess alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Thank You For Signing Up to the ASCVigil&trade; Newsletter.</div>";
		header("Refresh:1");
	}

}

?>


