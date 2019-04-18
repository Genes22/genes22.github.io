<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailer/vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'email.com';          // SMTP username
$mail->Password = '@passthru(command)'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                          // TCP port to connect to

$mail->setFrom('genes0022@gmail.com', 'Genes');
$mail->addReplyTo('genes0022@gmail.com', 'Genes');
$mail->addAddress('genesstanley@yahoo.com');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Sending a test email using PHPMailer</h1>';
$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>Genes</b></p>';

$mail->Subject = 'Email from Localhost by Genes';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>