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

	$db = new datbconnection();
	$query = "INSERT INTO category (cat_name) VALUES ()";
	$result = $db->query($query);

	if ($result) {

	}

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


function addForum() {

	$pid = $_POST[''];
	$fid = $_POST[''];
	$postby = $_POST[''];
	$postText = $_POST[''];
	$postDate = $_POST[''];

	$db = new datbconnection();
	$query = "";
	$result = $db->query($query);

}









?>