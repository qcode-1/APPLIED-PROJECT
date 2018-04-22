<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('dbConnection.php');


//Load composer's autoloader
require_once ('../mailer/vendor/autoload.php');

date_default_timezone_set('UTC');

// displayForums();



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
	$qry = "SELECT forum.forum_id, student.username, category.cat_name, category.cat_badge, forum.forum_topic, forum.forum_text FROM forum, student, category WHERE forum.user_id=student.student_id AND category.cat_id=forum.forum_cat";

	$result = $db->query($qry);

	if ($result) {
		// max-width: 18rem;

		while ($row = $db->fetchArray()) {

			if (getUsername($_SESSION['id']) == $row['username']) {

				echo '<div class="card border-info mb-3" style="">
				<div class="card-header"><a class="" href="forumPage?forumID=' . $row['forum_id'] . '">' . $row['forum_topic'] . '</a>
				<span style="display: block;"><small>Started by YOU</small> <small class="float-right badge badge-'. $row['cat_badge'] .'"> ' . $row['cat_name'] .  ' </small></span></div>

				<div class="card-body text-dark">
				<p class="card-text">' . $row['forum_text'] . '</p>
				</div>
				</div>';

			}

			else {

				echo '<div class="card border-info mb-3" style="">
				<div class="card-header"><a href="forumPage?forumID=' . $row['forum_id'] . '">' . $row['forum_topic'] . '</a>
				<span style="display: block;"><small>Started by ' . $row['username']  . '</small> <small class="float-right badge badge-'. $row['cat_badge'] .'"> ' . $row['cat_name'] .  ' </small></span></div>

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


function insertPost() {

	$pid = $_POST[''];
	$fid = $_POST[''];
	$postby = $_POST[''];
	$postText = $_POST[''];
	$postDate = $_POST[''];

	$db = new datbconnection();
	$query = "";
	$result = $db->query($query);

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
		echo "<script type='text/javascript'> alert(\"Successfully Added.\"); </script>";
	}

}

function addTopic() {

	$tpSubject = $_POST[''];
	$tpdate = $_POST[''];
	$tpCat = $_POST[''];
	$tpBy = $_POST[''];

	$db = new datbconnection();
	$query = "INSERT INTO topics (topic_subject, topic_date, topic_cat, topic_by) VALUES ()";
	$result = $db->query($query);

}

function editTopic() {

}





function addForum($id) {

	$fTopic = $_POST['forumTopic'];
	$fCat = $_POST['forum_cat'];
	$fPost = $_POST['forum_post'];
	// $postText = $_POST[''];
	// $postDate = $_POST[''];

	$db = new datbconnection();
	$query = "INSERT INTO forum (user_id, forum_topic, forum_cat, forum_text) VALUES ('$id', '$fTopic', '$fCat', '$fPost')";
	$result = $db->query($query);

	if ($result) {
		echo "worked";
	}

	else {

		echo "<script type='text/javascript'> alert(\"Didnt work.\"); </script>";
	}

}









?>