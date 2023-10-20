<?php

require_once '../vendor/autoload.php';
require_once __DIR__ . '/helpers/Dotenv.php';

use App\Helpers\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$json_data = file_get_contents("php://input");
$formData = json_decode($json_data, true);

$mail = new PHPMailer(true);

// Загрузка .env файла
$dotenv = null;
try {
    $dotenv = new Dotenv(__DIR__ . '/../.env');
    $dotenv->load();
} catch (Exception $ex) {
    echo 'Error occurred while loading .env file: ' . $ex->getMessage();
}

if ($formData !== null) {
    $name = $formData['name'] ?? '';
    $email = $formData['email'] ?? '';
    $problem = $formData['problem'] ?? '';
    $file = $formData['file'] ?? '';

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SMTP_USERNAME'];                     // SMTP email
        $mail->Password = $_ENV['SMTP_PASSWORD'];                               // SMTP пароль
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;                                    // 467 или 587

        //Recipients
        $mail->setFrom($_ENV['SMTP_USERNAME']); // отправитель
        $mail->addAddress($_ENV['SMTP_USERNAME']); // получатель
        if ($_SESSION['is_logged_in'] === 'logged_in')
            $mail->addAddress($_SESSION['admin']['email']);

        $mail->Subject = $email . ' - ' . $name;
        $mail->Body = $problem;

        $mail->send();

        echo 'Сообщение отправлено';
    } catch (Exception $e) {
        echo "Сообщение не отправлено: {$mail->ErrorInfo}";
    }
} else {
    http_response_code(400);
    echo json_encode(array('error' => 'Неверный формат Json данных!'));
}