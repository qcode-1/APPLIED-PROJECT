<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('dbConnection.php');


//Load composer's autoloader
//require_once ('../mailer/vendor/autoload.php');

date_default_timezone_set('UTC');


function test_input($dat) {
	$data = trim($dat);
	$data = stripslashes($dat);
	$data = htmlspecialchars($dat);
	return $dat;
}


function insertPost() {


}


function insertSubject() {


}


function addTopic() {

	
}









?>