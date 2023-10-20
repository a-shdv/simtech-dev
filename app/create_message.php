<?php

namespace App;

use App\Helpers\DbConnection;
use App\Helpers\FileUploader;
use App\Repos\MessageRepo;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ .'/helpers/FileUploader.php';
require_once __DIR__ . '/repos/MessageRepo.php';
require_once __DIR__ . '/conf/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $conn;

    $file = $_FILES['fileUpload'];
    $file['name'] = FileUploader::encodeFilename($file['name']);
    FileUploader::uploadFile($file);

    $formMessage = [
        'username' => trim($_POST['username']),
        'email' => trim($_POST['email']),
        'phone_number' => trim($_POST['phoneNumber']),
        'gender' => trim($_POST['gender']),
        'city' => trim($_POST['city']),
        'problem_desc' => trim($_POST['problemDesc']),
        'filename' => '/../public/img/'. $file['name']
    ];

    try {
        DbConnection::establishDbConn($conn);

        MessageRepo::createTableIfNotExists($conn);
        MessageRepo::insertTable($conn, $formMessage);

        DbConnection::closeDbConn($conn);
    } catch (Exception $ex) {
        echo 'Could not handle the request';
    }
    // Редирект
    header('Location: ../public/index.php');
}
