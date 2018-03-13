

<!DOCTYPE html>
<html>
<head>
	<title>TEST JSON</title>
</head>
<body>

	<p id="demo"></p>

	<p id="demo2"></p>

	<p id="demo3"></p>


	<?php

	$url = 'ASCSurveymain.json'; // path to your JSON file
	$data = file_get_contents($url); // put the contents of the file into a variable
	$wizards = json_decode($data);

	echo $wizards->ResultCount;

	foreach ($wizards as $wizard) {
	echo $wizard['ResultCount'] . 
			 $wizard['Data'][0]['academicAssessment'] . ', ' . 
		   $wizard['Data'][0]['presidentAssessment'] . ', with a ' . 
		   $wizard['Data'][0]['whatMajor'] . ' core. <br>' ;
}


	?>



	<script type="text/javascript">


		var data_json = {"ResultCount":13,"Data":[
		{"whatGender":["M"],"Class":["Sophomore"],"whatMajor":["CE"],"academicAssessment":1,"presidentAssessment":5,"HappendAt":"\/Date(1520813198182)\/","IPAddress":"41.79.97.5"},
		{"whatGender":["M"],"Class":["Freshman"],"whatMajor":["MIS"],"academicAssessment":3,"presidentAssessment":5,"HappendAt":"\/Date(1520813090771)\/","IPAddress":"41.79.97.5"},
		{"Class":["Sophomore"],"whatGender":["F"],"whatMajor":["CE"],"academicAssessment":1,"presidentAssessment":5,"HappendAt":"\/Date(1520813060044)\/","IPAddress":"41.79.97.5"},
		{"whatGender":["M"],"Class":["Sophomore"],"whatMajor":["CE"],"academicAssessment":3,"presidentAssessment":4,"HappendAt":"\/Date(1520813271098)\/","IPAddress":"41.79.97.5"},
		{"whatGender":["F"],"Class":["Junior"],"whatMajor":["BA"],"presidentAssessment":4,"academicAssessment":5,"HappendAt":"\/Date(1520813171836)\/","IPAddress":"41.79.97.5"},
		{"whatGender":["F"],"Class":["Sophomore"],"whatMajor":["BA"],"academicAssessment":2,"presidentAssessment":5,"HappendAt":"\/Date(1520813029239)\/","IPAddress":"41.79.97.5"},
		{"whatGender":["M"],"Class":["Sophomore"],"whatMajor":["ME"],"presidentAssessment":3,"academicAssessment":5,"HappendAt":"\/Date(1520813179541)\/","IPAddress":"41.79.97.5"},
		{"whatGender":["M"],"Class":["Sophomore"],"whatMajor":["ME"],"academicAssessment":3,"presidentAssessment":4,"HappendAt":"\/Date(1520813599385)\/","IPAddress":"41.79.97.5"},
		{"whatGender":["F"],"Class":["Sophomore"],"whatMajor":["MIS"],"presidentAssessment":4,"academicAssessment":4,"HappendAt":"\/Date(1520813772334)\/","IPAddress":"41.79.97.5"},
		{"whatGender":["F"],"Class":["Junior"],"whatMajor":["CE"],"academicAssessment":4,"presidentAssessment":5,"HappendAt":"\/Date(1520813484998)\/","IPAddress":"41.79.97.5"},
		{"whatGender":["M"],"Class":["Junior"],"whatMajor":["ME"],"academicAssessment":3,"presidentAssessment":5,"HappendAt":"\/Date(1520813694891)\/","IPAddress":"41.79.97.5"},
		{"Class":["Senior"],"whatGender":["M"],"whatMajor":["CS"],"academicAssessment":2,"presidentAssessment":5,"HappendAt":"\/Date(1520813050114)\/","IPAddress":"41.79.97.5"},
		{"whatGender":["F"],"Class":["Freshman"],"whatMajor":["CS"],"presidentAssessment":3,"academicAssessment":5,"HappendAt":"\/Date(1520813120669)\/","IPAddress":"41.79.97.5"}]
	}




	document.getElementById("demo").innerHTML = "Total results are: " + data_json.ResultCount;

	var actualData = data_json.Data;

	document.getElementById("demo2").innerHTML = "Total results are: " + JSON.stringify(actualData);
	document.getElementById("demo3").innerHTML = "An assessment data is: " + actualData.academicAssessment;


	for (var i=0; i < data_json.ResultCount; i++) {

		console.log(actualData.academicAssessment);

	}

</script>

</body>
</html>