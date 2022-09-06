<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

//Load Composer's autoloader
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Sendmail;
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "imtiaz.hasan121@gmail.com";
$mail->Password = "zutfiupuyicnblkt";

$mail->setFrom($email, $name);
$mail->Subject = $subject;
$mail->addAddress("imtiaz.hasan121@gmail.com",$email);
$msg="Name: ".$name."\n Email: ".$email."\n Subject: ".$subject."\n Message: ".$message;


$mail->Body = $msg;

$mail->send();
echo "Message Send Successfully !";





















?>