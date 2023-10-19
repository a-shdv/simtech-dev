<?php

use App\Repos\AdminRepo;
use App\Helpers\DbConnection;

require_once __DIR__ . '/repos/AdminRepo.php';
require_once __DIR__ . '/conf/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $conn;

    $formLogin = [
        'email' => trim($_POST['email']),
        'password' => password_hash(trim($_POST['password']), PASSWORD_BCRYPT)
    ];

    DbConnection::establishDbConn($conn);

    AdminRepo::createTableIfNotExists($conn);
    AdminRepo::insertTable($conn, $formLogin);

    DbConnection::closeDbConn($conn);
}