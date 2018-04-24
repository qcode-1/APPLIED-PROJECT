<?php

require_once('../database/dbConnection.php');
require_once('../database/process.php');


$input = filter_input_array(INPUT_POST);
$dbconn = new datbconnection();
$stat = $input["status"];

if($input["action"] === 'edit') {

	$id = $input["comment_id"];

	$query = "UPDATE usercomment SET status = '$stat' where comment_id = '$id' ";
	$result = $dbconn->query($query);

	if ($result){
		echo "Worked";
	}
	else {
		echo "Didnt work";
	}

}




?>