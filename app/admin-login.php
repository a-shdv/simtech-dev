<?php

use App\Repos\AdminRepo;

require_once __DIR__ . '/repos/AdminRepo.php';
require_once __DIR__ . '/conf/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $conn;

    $formLogin = [
        'email' => trim($_POST['email']),
        'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
//        'password' => $_POST['password']
    ];

    AdminRepo::establishDbConn($conn);

    AdminRepo::createTableIfNotExists($conn);
    AdminRepo::insertTable($conn, $formLogin);

    AdminRepo::closeDbConn($conn);
}