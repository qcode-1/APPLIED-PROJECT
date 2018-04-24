<?

require_once('dbConnection.php');


if (isset($_GET['notID'])) {

	$nid = $_GET['notID'];

	$dbconn = new datbconnection();
	$query = "DELETE FROM notes where note_id = '$nid' ";
	$result = $dbconn->query($query);

	if ($result) {
		echo "<div class=\"alertSuccess alert alert-success\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Note deleted</div>";
		header("Location: ../view/admin.php");
	}

	else {

		echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Failed. Try again.</div>";
		header("Refresh:2");
		
	}

}

else {
	echo "<div class=\"alertSuccess alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0; text-align: center;\" id=\"alertSuccess\">Failed. Try again.</div>";
	header("Refresh:2");
}

?>