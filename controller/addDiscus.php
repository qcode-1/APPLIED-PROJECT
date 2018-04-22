<?php

require_once('../database/dbConnection.php');

session_start();

// if (isset($_POST['addDiscussion'])) {

	$id = $_SESSION['id'];
	$fTopic = $_POST['forumTopic'];
	$fCat = $_POST['forum_cat'];
	$fPost = $_POST['forum_post'];

	echo "<script>console.log(jhgkhjg" . $fTopic . ")</script>";
	echo $fCat;
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

// }

?>