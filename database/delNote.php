<?

require_once('dbConnection.php');


if (isset($_GET['notID'])) {

	$nid = $_GET['notID'];

	$dbconn = new datbconnection();
	$query = "DELETE FROM notes where note_id = '$nid' ";
	$result = $dbconn->query($query);

	if ($result) {
		header("Location: ../view/admin.php");
	}

	else {
	echo "Didnt work";
}

}

else {
	echo "Didnt work";
}

?>