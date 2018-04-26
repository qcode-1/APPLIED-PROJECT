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

var academic = 0;
var outreach = 0;
var sports = 0;
var finance = 0;
var offCampus = 0;
var publicRelations = 0;
var welfare = 0;
var ent = 0;

var getReslt = firebase.database().ref().child('committeeEvaluation');

getReslt.on("child_added", snap => {

	var acadRating = snap.child('acadRating').val();
	academic = academic + Number(acadRating);

	var outreachAssess = snap.child('outreachRating').val();
	outreach = outreach + Number(outreachAssess);

	var sportsAssess = snap.child('sportsRating').val();
	sports = sports + Number(sportsAssess);

	var financeAssess = snap.child('financeRating').val();
	finance = finance + Number(financeAssess);

	var offcampusAssess = snap.child('offcampusRating').val();
	offCampus = offCampus + Number(offcampusAssess);

	var prAssess = snap.child('prRating').val();
	publicRelations = publicRelations + Number(prAssess);

	var welfareAssess = snap.child('welfareRating').val();
	welfare = welfare + Number(welfareAssess);

	var entAssess = snap.child('entRating').val();
	ent = ent + Number(entAssess);

	function getCount() {
		var count = 0;

		getReslt.on('value', function(snapshot) {
			snapshot.forEach(function() {
				count++;
			});
		});
		return count;
	}


	var ctx = document.getElementById("barChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Academic", "Outreach", "Sports", "Finance", "Offcampus", "Public Relations", "Welfare", "Entertainment"],
			datasets: [{
				label: 'Assessment of ASC Executive Committees (Max rating: ' +(getCount()*5) +')',
				data: [academic, outreach, sports, finance, offCampus, publicRelations, welfare, ent],
				backgroundColor: [
				'rgba(255, 99, 132, 1)',
				'rgba(54, 162, 235, 1)',
				'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(149, 19, 127, 1)',
                'rgba(248, 234, 109, 1)',
                'rgba(255, 178, 168, 1)'
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
});