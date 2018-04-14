	  


	  // Initialize Firebase
	  var config = {
	  	apiKey: "AIzaSyA3Az4iL6IQ7njPUfGiG5WLbpTf4zwvid0",
	  	authDomain: "final-45892.firebaseapp.com",
	  	databaseURL: "https://final-45892.firebaseio.com",
	  	projectId: "final-45892",
	  	storageBucket: "final-45892.appspot.com",
	  	messagingSenderId: "839340408240"
	  };


	  firebase.initializeApp(config);

	  var outreachRating = 0;
	  var y = 0;
	  var n = 0;

	  var none = 0;
	  var one = 0;
	  var two = 0;
	  var three = 0;
	  var four = 0;

	  var fr = 0;
	  var sph = 0;
	  var jun = 0;
	  var snr = 0;

	  var getReslt = firebase.database().ref().child('outreachsurvey');

	  

	  function gotData(data) {
	  	var surveys = data.val();
	  	// Grab all the keys to iterate over the object

	  	var keys = Object.keys(surveys);

	  	// Loop through array
	  	for (var i = 0; i < keys.length; i++) {
	  		var key = keys[i];
	  		var survey = surveys[key];
	  		var outHistory = survey.outreachHistory;

	  		if (outHistory == 'Y') {
	  			y++;
	  		}
	  		else if (outHistory == 'N') {
	  			n++;
	  		}		
	  	}	
	  }

	  function gotFrequency(data) {
	  	var surveys = data.val();

		// Grab all the keys to iterate over the object
		var keys = Object.keys(surveys);

		// Loop through array
		for (var i = 0; i < keys.length; i++) {
			var key = keys[i];
			var survey = surveys[key];
			var freq = survey.howManyPrograms;

			if (freq == '0') {
				none++;
			}
			else if (freq == '1') {
				one++;
			}	
			else if (freq == '2') {
				two++;
			}
			else if (freq == '3') {
				three++;
			}
			else if (freq == '4') {
				four++;
			}	
		}	
	}


	function gotClass(data) {
	  	var surveys = data.val();

		// Grab all the keys to iterate over the object
		var keys = Object.keys(surveys);

		// Loop through array
		for (var i = 0; i < keys.length; i++) {
			var key = keys[i];
			var survey = surveys[key];
			var level = survey.class;

			if (level == "Senior") {
				snr++;
			}
			else if (level == "Junior") {
				jun++;
			}	
			else if (level == "Sophomore") {
				sph++;
			}
			else if (level == "Freshman") {
				fr++;
			}
		}	
	}


	function errData(error) {
	  	console.log("Something went wrong.");
	  	console.log(error);
	  }



	var ref = firebase.database().ref().child('outreachsurvey');
	ref.on("value", gotData, errData);

	var ref_freq = firebase.database().ref().child('outreachsurvey');
	ref_freq.on("value", gotFrequency, errData);

	var class_ref = firebase.database().ref().child('outreachsurvey');
	class_ref.on("value", gotClass, errData);

	getReslt.on("child_added", snap => {

		var outreach = snap.child('effectiveOutreach').val();
		outreachRating = outreachRating + Number(outreach);

		function getCount() {
			var count = 0;

			getReslt.on('value', function(snapshot) {
				snapshot.forEach(function() {
					count++;
				});
			});
			return count;
		}


		var ctx = document.getElementById("histChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Outreach Activity"],
				datasets: [{
					label: 'How Effective has ASC been with regards to Outreach? (Max rating: ' +(getCount()*5) +')',
					data: [outreachRating],
					backgroundColor: [
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255, 206, 86, 0.2)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});



		var historyChart = document.getElementById("pieChart").getContext('2d');
		var historyData = {
			labels: ["YES", "NO"],
			datasets: [{
				data: [y,n],
				backgroundColor: ["#DC143C", "#2E8B57"]
			}]
		};
		var pieChart = new Chart(historyChart, {
			type: 'pie',
			data: historyData
		});


		var fqChart = document.getElementById("freqChart").getContext('2d');
		var frequencyData = {
			labels: ["Never", "One Program", "Two Programs", "Three Programs", "Four Programs"],
			datasets: [{
				data: [none,one, two, three, four],
				backgroundColor: ["#f16529", "#4389a2", "#302b63", "#4ca2cd", "#d76d77"]
			}]
		};
		var pieChart = new Chart(fqChart, {
			type: 'pie',
			data: frequencyData
		});


		var clsChart = document.getElementById("classChart").getContext('2d');
		var classData = {
			labels: ["Freshman", "Sophomore", "Junior", "Senior"],
			datasets: [{
				data: [fr, sph, jun, snr],
				backgroundColor: ["#605c3c", "#94716b", "#aa3a38", "#4ca2cd"]
			}]
		};
		var pieChart = new Chart(clsChart, {
			type: 'pie',
			data: classData
		});

	});




