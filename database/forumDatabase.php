<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('dbConnection.php');


//Load composer's autoloader
//require_once ('../mailer/vendor/autoload.php');

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


function displayForums() {

	$db = new datbconnection();
	$query = "SELECT forum.forum_id, forum.user_id, forum.forum_topic, forum.forum_cat, forum.forum_text, student.student_id,  student.username, category.cat_name FROM forum, student, category WHERE forum.user_id = student.student_id & forum.forum_cat = category.cat_name";
	$result = $db->query($query);




	echo '<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Info card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>';

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