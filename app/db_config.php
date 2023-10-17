<?php

require_once __DIR__ . '/helpers/Dotenv.php';
require_once __DIR__ . '/helpers/DbConnection.php';

// Загрузка .env файла
$dotenv = null;
try {
    $dotenv = new Dotenv(__DIR__ . '/../.env');
    $dotenv->load();
} catch (Exception $ex) {
    echo 'Error occurred while loading .env file: ' . $ex->getMessage();
}

// Подключение к БД
$dbConnection = null;
$mysqli = null;
try {
    $dbConnection = new DbConnection(
        $_ENV['DB_HOST'],
        $_ENV['DB_USERNAME'],
        $_ENV['DB_PASSWORD'],
        $_ENV['DB_DATABASE'],
        $_ENV['DB_PORT']
    );

    $mysqli = new mysqli(
        $dbConnection->getDbHost(),
        $dbConnection->getDbUsername(),
        $dbConnection->getDbPassword(),
        $dbConnection->getDbDatabase(),
        $dbConnection->getDbPort()
    );
} catch (Exception $ex) {
    echo 'Error occurred while connecting to db: ' . $ex->getMessage();
}
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}