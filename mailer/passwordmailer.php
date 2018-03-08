



<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

require_once('../database/dbConnection.php');




$email = $_POST['eml'];



$datbconn = new datbconnection();
$que = "SELECT email FROM student where email = '$email'";
$result = $datbconn->query($que);

if ($result && $datbconn->getNumRows() > 0) {

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
    //Server settings
    //$mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'nii.quartey19@gmail.com';                 // SMTP username
    $mail->Password = 'Marktwain@1';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('nii.quartey19@gmail.com', 'ASCVigil');
    $mail->addAddress($email, '');     // Add a recipient

    $body = "<p><h4> Thank You for Using ASCVigil&trade;</h4></p>
    <p>You have requested to chnage your password. Please follow this link to <a href=\"http://localhost/Github/APPLIED-PROJECT/view/changePassword.php\">change your password</a>.</p>
    <p>Any Questions? Please login and leave your comments. Your feedback will be much appreciated.</p>";

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to ASCVigil';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    //echo 'Message has been sent';
    header("Location: login.php");

    } 


    catch (Exception $e) {
    //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    echo "<script type='text/javascript'>alert('UNSUCCESSFUL');</script>";

}

}

else {
    $message = "This email does not exist.\\nEnter a valid email address.";
    echo "<script type='text/javascript'>alert('$message');</script>";
}



?>