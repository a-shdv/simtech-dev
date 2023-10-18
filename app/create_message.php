<?php

namespace App;

use App\Helpers\FileUploader;
use App\Repos\MessageRepo;

require_once 'helpers/FileUploader.php';
require_once 'repos/MessageRepo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    MessageRepo::createTable();
    MessageRepo::insertTable($formMessage);
    MessageRepo::closeDbConnection();

    // Редирект
    header('Location: ../public/index.php');
}
