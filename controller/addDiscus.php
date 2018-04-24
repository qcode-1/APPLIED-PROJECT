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
		echo "worked";
	}

	else {

		echo "Didnt work";
	}

}

else {
	echo "NOT SET";
}

?>