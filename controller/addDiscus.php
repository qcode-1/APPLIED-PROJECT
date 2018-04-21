<?php

require_once('../database/dbConnection.php');
require_once('../database/forumDatabase.php');

session_start();

if (isset($_POST['addDiscussion'])) {

	$id = $_SESSION['id'];
	$fTopic = $_POST['forumTopic'];
	$fCat = $_POST['forum_cat'];
	$fPost = $_POST['forum_post'];

	$db = new datbconnection();
	$query = "INSERT INTO forum (user_id, forum_topic, forum_cat, forum_text) VALUES ('$id', '$fTopic', '$fCat', '$fPost')";
	$result = $db->query($query);

	if ($result) {
		echo "worked";
	}

	else {

		echo "Didnt work";
	}

}

?>