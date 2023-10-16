<?php
require_once 'helpers/Dotenv.php';
require_once 'helpers/DbConnection.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dotenv = null;
    try {
        $dotenv = new Dotenv(__DIR__ . '/../.env');
        $dotenv->load();
    } catch (Exception $ex) {
        echo 'Error occurred while loading .env file: ' . $ex->getMessage();
    }

    $dbConnection = null;
    try {
        $dbConnection = new DbConnection(
            $_ENV['DB_HOST'],
            $_ENV['DB_USERNAME'],
            $_ENV['DB_PASSWORD'],
            $_ENV['DB_DATABASE'],
            $_ENV['DB_PORT']
        );
        $dbConnection->connect(
            $dbConnection->getDbHost(),
            $dbConnection->getDbUsername(),
            $dbConnection->getDbPassword(),
            $dbConnection->getDbDatabase(),
            $dbConnection->getDbPort()
        );
    } catch (Exception $ex) {
        echo 'Error occurred while connecting to db: ' . $ex->getMessage();
    }
}