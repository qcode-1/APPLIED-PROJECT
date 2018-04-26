<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('dbConnection.php');


date_default_timezone_set('UTC');


function displayCategories() {

	$db = new datbconnection();
	$query = "SELECT * FROM category";
	$result = $db->query($query);

	if ($result) {

		while ($row = $db->fetchArray()) {

			echo "
			<li class=\"cats\"><p class=\"badge badge-". $row['cat_badge']. "\">-</p>    " . $row['cat_name'] . "</li>
			";
		}
	}
}

function displayForums() {

	$db = new datbconnection();
	$qry = "SELECT forum.forum_id, student.username, category.cat_name, category.cat_badge, forum.forum_topic, forum.forum_text FROM forum, student, category WHERE forum.user_id=student.student_id AND category.cat_id=forum.forum_cat ORDER BY forum.forum_id DESC";

	$result = $db->query($qry);

	if ($result) {
		// max-width: 18rem;

		while ($row = $db->fetchArray()) {

			if (getUsername($_SESSION['id']) == $row['username']) {

				echo '<div class="card border-info mb-3" style="">
				<div class="card-header"><a class="" href="forumPage.php?forumID=' . $row['forum_id'] . '">' . $row['forum_topic'] . '</a>
				<span style="display: block;"><small> ~ by YOU</small> 
				<small class="float-right badge badge-'.$row['cat_badge'].'"> ' . $row['cat_name'] . ' | ' . getPostCount($row['forum_id']) . ' posts</small></span></div>

				<div class="card-body text-dark">
				<p class="card-text">' . $row['forum_text'] . '</p>
				</div>
				</div>';

			}

			else {

				echo '<div class="card border-info mb-3" style="">
				<div class="card-header"><a href="forumPage.php?forumID=' . $row['forum_id'] . '">' . $row['forum_topic'] . '</a>
				<span style="display: block;"><small> ~ by ' . $row['username']  . '</small> 
				<small class="float-right badge badge-'. $row['cat_badge'] .'"> ' . $row['cat_name'] . ' | ' . getPostCount($row['forum_id']) . ' posts</small></span></div>

				<div class="card-body text-dark">
				<p class="card-text">' . $row['forum_text'] . '</p>
				</div>
				</div>';

			}
		}
	}
}

function getUsername($id) {

	$db = new datbconnection();
	$query = "SELECT username FROM student WHERE student_id = '$id'";
	$result = $db->query($query);

	if ($result) {
		while ($row = $db->fetchArray()) {
			return $row['username'];
		}
	}
}


function insertSubject() {

	$pid = $_POST[''];
	$fid = $_POST[''];
	$postby = $_POST[''];
	$postText = $_POST[''];
	$postDate = $_POST[''];

	$db = new datbconnection();
	$query = "";
	$result = $db->query($query);


}

function getForumCount() {

	$dbconn = new datbconnection();
	$query = "SELECT * FROM forum";
	$result = $dbconn->query($query);
	$count = $dbconn->getRows();

	echo $count;

}

function loadCategories() {

	$db = new datbconnection();
	$query = "SELECT * FROM category";
	$result = $db->query($query);

	if ($result) {
		while ($row = $db->fetchArray()) {
			echo "<option value=" . $row['cat_id'] . ">" . $row['cat_name'] ."</option>";
		}
	}
}

function addCategory() {

	$pid = $_POST[''];
	$pid = $_POST[''];

	$db = new datbconnection();
	$query = "INSERT INTO category (cat_name, cat_badge) VALUES ()";
	$result = $db->query($query);

	if ($result) {
		echo "<div class=\"alertSuccess alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">New category added.</div>";
	}

}


function addForum($id) {

	$fTopic = $_POST['forumTopic'];
	$fCat = $_POST['forum_cat'];
	$fPost = $_POST['forum_post'];
	$db = new datbconnection();
	$query = "INSERT INTO forum (user_id, forum_topic, forum_cat, forum_text) VALUES ('$id', '$fTopic', '$fCat', '$fPost')";
	$result = $db->query($query);

	if ($result) {
		echo "<div class=\"alertSuccess alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">You have started a new forum. Happy posting.</div>";
	}
	else {
		echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Could not post forum. Please try again later.</div>";
	}
}

function displayHeader($fid) {

	$dbconn = new datbconnection();
	$query = "SELECT category.cat_name, category.cat_badge, forum.forum_topic, forum.forum_text FROM forum, category where forum.forum_id = '$fid' AND forum.forum_cat = category.cat_id";
	$result = $dbconn->query($query);

	if ($result) {

		while ($row = $dbconn->fetchArray()) {
			echo '<div class="jumbotron bg-' . $row['cat_badge'] . '">
			<div class="container text-dark" style="text-align: center;">
			<p class="">' . $row['forum_topic'] . '</p>
			<span style="display: block;">' . $row['forum_text'] .'</span>
			<span class="badge badge-light">' . $row['cat_name'] . '</span>
			</div>
			</div>';
		}
	}
}


function insertPost($fid) {

	$postby = $_POST['userId'];
	$postText = $_POST['myText'];
	$postDate = $_POST['post_date'];

	$datb = new datbconnection();
	$query = "INSERT INTO posts (forum_id, post_by, post_text, post_date) VALUES ('$fid', '$postby', '$postText', '$postDate')";
	$result = $datb->query($query);

	if ($result) {
		echo "<div class=\"alertSuccess alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Post submitted.</div>";
		header("Refresh:2");
	}
	else {
		echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Post failed. Please try again later</div>";
	}

}


function getDatediff($d) {

	$date2 = date("Y-m-d");

	$diff = abs(strtotime($date2) - strtotime($d));

	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	$day = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

	return $day;

}


function displayPosts($forumid) {

	$dbconn = new datbconnection();
	$query = "SELECT * FROM posts where forum_id = '$forumid'";
	$result = $dbconn->query($query);
	$count = $dbconn->getRows();

	if ($result) {

		if ($count > 0) {

			while ($row = $dbconn->fetchArray()) {

				if (getDatediff($row['post_date']) == 0) {

					echo '<span class="font-weight-bold font-italic">' . getUsername($row['post_by']) . '</span> <small class="float-right text-secondary">today</small>
					<span style="display: block;">' . $row['post_text'] . '</span>
					<hr>
					<br>';
				}

				else if (getDatediff($row['post_date']) == 1) {

				echo '<span class="font-weight-bold font-italic">' . getUsername($row['post_by']) . '</span> <small class="float-right text-secondary">' . getDatediff($row['post_date']) . ' day ago</small>
					<span style="display: block;">' . $row['post_text'] . '</span>
					<hr>
					<br>';
				}

				else {

					echo '<span class="font-weight-bold font-italic">' . getUsername($row['post_by']) . '</span> <small class="float-right text-secondary">' . getDatediff($row['post_date']) . ' days ago</small>
					<span style="display: block;">' . $row['post_text'] . '</span>
					<hr>
					<br>';

				}
			}
		}

		else {
			echo '<p style="text-align: center;">NO POSTS YET</p> 
			<hr>
			<br>';
		}
	}
}


function getPostCount($fid) {


	$dbconn = new datbconnection();
	$query = "SELECT * FROM posts where forum_id = '$fid'";
	$result = $dbconn->query($query);
	$count = $dbconn->getRows();

	return $count;
}

function sendNews() {

	include('../mailer/vendor/autoload.php');
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$topic = $_POST['newstopic'];

	$datbconn = new datbconnection();
	$que = "SELECT user_email FROM subscription";
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


while ($row = $datbconn->fetchArray()) {
	    //Recipients
	    $mail->setFrom('nii.quartey19@gmail.com', 'ASCVigil Newsletter');
	    $mail->addAddress($row['user_email'], '');     // Add a recipient

	    $body = "<p><h4>" . $topic . "</h4></p>
	    <p class=\"text-justify\">" . $message . "</p>
	    <p>Any Questions? Please login and use the contact form.</p>

	    <p class=\"text-primary\" style=\"text-align: center;\">This Newsletter is brought to you by ASCVigil&trade;.</p>";

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = $subject;
	    $mail->Body    = $body;
	    $mail->AltBody = strip_tags($body);

	    $mail->send();

	}
	    //echo 'Message has been sent';
	    echo "<div class=\"alertSuccess alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Newsletter Sent.</div>";
		header("Refresh:2");
	}


	catch (Exception $e) {
    //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Failed. Please try again.</div>";
		header("Refresh:1");

	}

}

else {
	echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Failed. Please try again.</div>";
	header("Refresh:1");
}
}


?>

