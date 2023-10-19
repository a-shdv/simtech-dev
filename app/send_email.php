<?php

require_once '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$json_data = file_get_contents("php://input");
$formData = json_decode($json_data, true);

$mail = new PHPMailer(true);

if ($formData !== null) {
    $name = $formData['name'] ?? '';
    $email = $formData['email'] ?? '';
    $problem = $formData['problem'] ?? '';
    $file = $formData['file'] ?? '';

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = '';                     //SMTP username (FROM)
        $mail->Password = '';                               //SMTP password (FROM)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('', '');

        $mail->Subject = $email . ' - ' . $name;
        $mail->Body = $problem;

        //Attachments
        $mail->send();

        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    http_response_code(400); // Bad Request
    echo json_encode(array('error' => 'Invalid JSON data'));
}