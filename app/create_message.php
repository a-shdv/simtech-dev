<?php

namespace App;

use App\Helpers\FileUploader;
use App\Repos\MessageRepo;

require_once 'helpers/FileUploader.php';
require_once 'repos/MessageRepo.php';
require_once 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $conn;

    $file = $_FILES['fileUpload'];
    $file['name'] = FileUploader::encodeFilename($file['name']);
    FileUploader::uploadFile($file);

    $formMessage = [
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'phone_number' => $_POST['phoneNumber'],
        'gender' => $_POST['gender'],
        'city' => $_POST['city'],
        'problem_desc' => $_POST['problemDesc'],
        'filename' => $file['name']
    ];

    MessageRepo::establishDbConn($conn);
    MessageRepo::createTable($conn);
    echo 'tesdsdssdt';
    MessageRepo::insertTable($conn, $formMessage);

    MessageRepo::closeDbConn($conn);

    // Редирект
    header('Location: ../public/index.php');
}
