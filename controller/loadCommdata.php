<?php

require_once('../database/dbConnection.php');
require_once('../database/process.php');


if (isset($_POST['cmt_id'])) {

	$comm_id = $_POST['cmt_id'];
	$output = '';

	$dbconn = new datbconnection();
	$query = "SELECT * FROM committee where comm_id = '$comm_id' ";
	$result = $dbconn->query($query);

	if ($result) {

		while ($row = $dbconn->fetchArray()) {
			$output .= '<form method="POST">
			<input type="hidden" class="form-control"  name="cmID" id="inputCommid" value="'. $row['comm_id'] . '">
			<div class="form-group row">
			<label for="" class="col-sm-2 col-form-label">Committee Name</label>
			<div class="col-sm-10">
			<input type="text" class="form-control"  name="comm_name" id="inputCommname" value="'. $row['comm_name'] . '">
			</div>
			</div>
			<div class="form-group row">
			<label for="" class="col-sm-2 col-form-label">Committee Head</label>
			<div class="col-sm-10">
			<input type="text" class="form-control"  name="comm_head" id="inputCommname" value="'. $row['comm_headName'] . '">
			</div>
			</div>
			<div class="form-group row">
			<label for="" class="col-sm-2 col-form-label">Description</label>
			<div class="col-sm-10">
			<textarea class="form-control" name="comm_descp" id="commDesc" rows="6" value="">'. $row['comm_desc'] . '</textarea>
			</div>
			</div>
			<button type="submit" name="update" class="btn btn-light">Update</button>
			</div></form>';
		}

		echo $output;

		if (isset($_POST['update'])) {
			updateCommData();
		}

	}

	else {
		echo "Query Failed";
	}
}
else{
	echo "Not Set";
}


?>