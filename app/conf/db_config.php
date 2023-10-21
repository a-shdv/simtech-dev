<?php

use App\Helpers\DbConnection;
use App\Helpers\Dotenv;

require_once __DIR__ . '/../helpers/Dotenv.php';
require_once __DIR__ . '/../helpers/DbConnection.php';

// Загрузка .env файла
$dotenv = null;
try {
    $dotenv = new Dotenv(__DIR__ . '/../../.env');
    $dotenv->load();
} catch (Exception $ex) {
    echo 'Error occurred while loading .env file: ' . $ex->getMessage();
}

$conn = new DbConnection(
    $_ENV['DB_HOST'],
    $_ENV['DB_USERNAME'],
    $_ENV['DB_PASSWORD'],
    $_ENV['DB_DATABASE'],
    $_ENV['DB_PORT']
);
DbConnection::establishDbConn($conn);

// Запуск sql-скриптов, запускащих создание таблиц
$sql = file_get_contents(__DIR__ . '/../../sql-scripts.sql');
if ($conn->getMySqli()->multi_query($sql) !== true) {
    echo "error while executing script: " . $conn->getMySqli()->error;
}
DbConnection::closeDbConn($conn);

