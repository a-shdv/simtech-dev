<?php
session_start();

use App\Helpers\DbConnection;
use App\Repos\AdminRepo;

require_once __DIR__ . '/repos/AdminRepo.php';
require_once __DIR__ . '/conf/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $conn;

    $form_admin = [
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password'])
    ];

    try {
        DbConnection::establishDbConn($conn);

        AdminRepo::createTableIfNotExists($conn);
        AdminRepo::login($conn, $form_admin)
            ? $_SESSION['is_logged_in'] = true
            : $_SESSION['is_logged_in'] = false;

        DbConnection::closeDbConn($conn);

        header('Location: ../public/get-messages.php');
    } catch (Exception $ex) {
        echo 'Could not handle the request';
    }
}