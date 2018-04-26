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

	    	var acad = 0;
	    	var press = 0;

	    	var cs = 0;
	    	var mgs = 0;
	    	var bus = 0;
	    	var enge = 0;
	    	var engm = 0;
	    	var engc = 0;
	    	var getReslt = firebase.database().ref().child('survey');

	    	function errData(error) {
			  console.log("Something went wrong.");
			  console.log(error);
			}

			function gotData(data) {
			  var surveys = data.val();
			  // Grab all the keys to iterate over the object
			  var keys = Object.keys(surveys);
			  console.log(keys)

			  // Loop through array
			  for (var i = 0; i < keys.length; i++) {
				 var key = keys[i];
				 var survey = surveys[key];
				
	    		var maj = survey.whatMajor

	    		if (maj == 'MIS') {
	    					mgs++;
	    		}
	    		else if (maj == 'CS') {
	    			cs++;
	    		}
	    		else if (maj == 'BA') {
	    			bus++;
	    		}
	    		else if (maj == 'EE') {
	    			enge++;
	    		}
	    		else if (maj == 'ME') {
	    			engm++;
	    		}
	    		else if (maj == 'CE') {
	    			engc++;
	    		}		
	    	  }	
	       }
	       var ref = firebase.database().ref().child('survey')
			ref.on("value", gotData, errData);
			
	    				
	    
	    	getReslt.on("child_added", snap => {

	    		var acadAssess = snap.child('academicAssessment').val();
	    		acad = acad + Number(acadAssess);
	    		var presAssess = snap.child('presidentAssessment').val();
	    		press = press + Number(presAssess);



	    		
	    		function getCount() {
	    			var count = 0;

	    			getReslt.on('value', function(snapshot) {
	    				snapshot.forEach(function() {
	    					count++;
	    				});
	    			});
	    			return count;
	    		}

	    		var divisor = getCount();

	    		// cs = (cs/divisor) * 100;
	    		// mgs = (mgs/divisor) * 100;
	    		// bus = (bus/divisor) * 100;
	    		// enge = (enge/divisor) * 100;
	    		// engm = (engm/divisor) * 100;
	    		// engc = (engc/divisor) * 100;


	    		var ctx = document.getElementById("myChart").getContext('2d');
	    		var myChart = new Chart(ctx, {
	    			type: 'bar',
	    			data: {
	    				labels: ["ASC President", "ASC Vice President"],
	    				datasets: [{
	    					label: 'Assessment of President and Vice-President (Max rating: ' +(getCount()*5) +')',
	    					data: [acad, press],
	    					backgroundColor: [
	    					'rgba(255, 99, 132, 0.2)',
	    					'rgba(54, 162, 235, 0.2)'
	    					],
	    					borderColor: [
	    					'rgba(255,99,132,1)',
	    					'rgba(54, 162, 235, 1)'
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

	    		var majorChart = document.getElementById("pieChart").getContext('2d');
	    		var majorData = {
	    			labels: ["CS", "MIS", "BA", "EE", "ME", "CE"],
	    			datasets: [{
	    				data: [cs, mgs, bus, enge, engm, engc],
	    				backgroundColor: ["#DEB887", "#0082c8", "#DC143C", "#603813", "#2E8B57", "#E39371"]
	    			}]
	    		};

	    		var pieChart = new Chart(majorChart, {
	    			type: 'pie',
	    			data: majorData
	    		});
	    	});