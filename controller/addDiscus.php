<?php

require_once('../database/dbConnection.php');

session_start();

if (isset($_POST['forumTopic']) && isset($_POST['forum_post'])) {

	$id = $_SESSION['id'];
	$fTopic = $_POST['forumTopic'];
	echo $fTopic;
	$fCat = $_POST['forum_cat'];
	echo $fCat;
	$fPost = $_POST['forum_post'];
	echo $fPost;

	$db = new datbconnection();
	$q = "INSERT INTO forum (user_id, forum_topic, forum_cat, forum_text) VALUES ('$id', '$fTopic', '$fCat', '$fPost')";
	$result = $db->query($q);

	if ($result) {
		echo "<div class=\"alertSuccess alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">You have started a new forum. Happy posting.</div>";
	}

	else {

		echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Could not post forum. Please try again later.</div>";
	}

}

else {
	echo "NOT SET";
}

?>