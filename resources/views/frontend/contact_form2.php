<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';

// $recaptcha_secret = '6LfB0yYpAAAAAEQY_qQQdZiiJxyL89X0ZjAqw3AJ';
// $recaptcha_response = $_POST['g-recaptcha-response'];

// $url = "https://www.google.com/recaptcha/api/siteverify";
// $data = [
//     'secret' => $recaptcha_secret,
//     'response' => $recaptcha_response,
// ];

// $options = [
//     'http' => [
//         'header' => "Content-type: application/x-www-form-urlencoded\r\n",
//         'method' => 'POST',
//         'content' => http_build_query($data),
//     ],
// ];

// $context = stream_context_create($options);
// $result = file_get_contents($url, false, $context);
// $json = json_decode($result, true);

// if ($json['success'] !== true) {
//     die('CAPTCHA verification failed!');
// }






//get data from form
$triptype = $_POST['triptype'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$vehicleService = $_POST['vehicleService'];
$pickup_location = $_POST['pickup_location'];
$pickup_landmark = $_POST['pickup_landmark'];
$drop_location = $_POST['drop_location'];
$date = $_POST['date'];
$time = $_POST['time'];
$drop_landmark = $_POST['drop_landmark'];

if ($_POST['triptype']) {
    $triptype = $_POST['triptype'];
}
if ($_POST['name']) {
    $name = $_POST['name'];
}
if ($_POST['email']) {
    $email = $_POST['email'];
}
if ($_POST['phone']) {
    $phone = $_POST['phone'];
}
if ($_POST['vehicleService']) {
    $vehicleService = $_POST['vehicleService'];
}
if ($_POST['pickup_location']) {
    $pickup_location = $_POST['pickup_location'];
}
if ($_POST['pickup_landmark']) {
    $pickup_landmark = $_POST['pickup_landmark'];
}
if ($_POST['drop_location']) {
    $drop_location = $_POST['drop_location'];
}
if ($_POST['date']) {
    $date = $_POST['date'];
}
if ($_POST['time']) {
    $time = $_POST['time'];
}

// preparing mail content
if ($pickup_landmark) {
    $messagecontent = '<html> 
  <head>
  <title>BALU CABS </title>
  </head>
  <body>
  <br>
  <h2>BALU CABS  - City To Airport</h2>

  <ul style="list-style-type:square;"> 
    <h3><li>Trip Type : ' . $triptype . '</li></h3>
    <h3><li>Full Name : ' . $name . '</li></h3>
    <h3><li>Email Address: ' . $email . '</li></h3>
    <h3><li>Phone Number: ' .  $phone . '</li></h3>
    <h3><li>Vehicle Service : ' . $vehicleService . '</li></h3>
    <h3><li>PickUp Location : ' . $pickup_location . '</li></h3>
    <h3><li>PickUp Landmark : ' . $pickup_landmark . '</li></h3>
    <h3><li>Drop Location : ' . $drop_location . '</li></h3>
    <h3><li>Date : ' . $date . '</li></h3>
    <h3><li>Time : ' . $time . '</li></h3>

  </ul>

  <h4 style="color: grey;">Thank you<br>BALU CABS  Team</h4>
  <br>

  </body> 
  </html>';
} else {
    $messagecontent = '<html> 
        <head>
        <title>BALU CABS </title>
        </head>
        <body>
        <br>
        <h2 style="color: #33bbff;">BALU CABS  - Airport To City   </h2>

        <ul style="list-style-type:square; color: #3399ff;"> 
            <h3><li>Trip Type : ' . $triptype . '</li></h3>
            <h3><li>Full Name : ' . $name . '</li></h3>
            <h3><li>Email Address: ' . $email . '</li></h3>
            <h3><li>Phone Number: ' .  $phone . '</li></h3>
            <h3><li>Vehicle Service : ' . $vehicleService . '</li></h3>
            <h3><li>PickUp Location : ' . $pickup_location . '</li></h3>
            <h3><li>Drop Landmark : ' . $drop_landmark . '</li></h3>
            <h3><li>Drop Location : ' . $drop_location . '</li></h3>
            <h3><li>Date : ' . $date . '</li></h3>
            <h3><li>Time : ' . $time . '</li></h3>
        </ul>

        <h4 style="color: grey;">Thank you<br>BALU CABS  Team</h4>
        <br>

        </body> 
        </html>';
}

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'balucabs9@gmail.com'; // Your Gmail email address
    $mail->Password = 'psiczadxzuzxlqrw'; // Your Gmail app password or your account password (if less secure apps are allowed)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to

    $mail->setFrom($email, $name);
    $mail->addAddress('balucabs9@gmail.com', 'BALU CABS');
    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body = $messagecontent;

    $mail->send();
    header('Location: https://balucabs.in/?status=success&message=' . urlencode('Thank you for contacting us. We will contact you shortly.'));
    exit;
} catch (Exception $e) {
    // Redirect with error message
    header('Location: https://balucabs.in/?status=error&message=' . urlencode("Message could not be sent. Mailer Error: {$mail->ErrorInfo}"));
    exit;
}
