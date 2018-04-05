

<!DOCTYPE html>
<html>
<head>
	<title>TEST JSON</title>
</head>
<body>

	<p id="demo"></p>

	<p id="demo2"></p>

	<p id="demo3"></p>

	<p id="demo4"></p>

	<p>

		<?php

		function getUserIpAddr(){
			if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			}else{
				$ip = $_SERVER['REMOTE_ADDR'];
			}
			return $ip;
		}

		echo 'User Real IP - '.getUserIpAddr();



		?>
		
	</p>

	<div style="max-height: 500px; max-width: 500px;">

		<canvas id="pieChart" width="500" height="500"></canvas>

	</div>


	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script> -->


	<script>

		var oilCanvas = document.getElementById("pieChart");

		Chart.defaults.global.defaultFontFamily = "Lato";
		Chart.defaults.global.defaultFontSize = 18;

		var oilData = {
			labels: [
			"Male",
			"Female"
			],
			datasets: [
			{
				data: [133.3, 86.2],
				backgroundColor: [
				
				"#63FF84",
				
				"#8463FF"
				]
			}]
		};

		var pieChart = new Chart(oilCanvas, {
			type: 'pie',
			data: oilData
		});

	</script>



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
document.getElementById("demo3").innerHTML = "An assessment data is: " + actualData[4].whatGender;

var totalAcademic = " ";


for (var i=0; i < data_json.ResultCount; i++) {

		// console.log(actualData[i].academicAssessment);

		// totalAcademic = totalAcademic + actualData[i].academicAssessment; 

		totalAcademic = totalAcademic + actualData[i].whatGender + "\n";

	}

	document.getElementById("demo4").innerHTML = totalAcademic;

</script>

</body>
</html>