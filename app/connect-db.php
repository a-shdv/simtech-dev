<?php
require_once 'helpers/Dotenv.php';
require_once 'helpers/DbConnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phoneNumber'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $problem_desc = $_POST['problemDesc'];
    $filename = '/test';
//    $se = "CREATE TABLE form_message
//(
//    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
//    username VARCHAR(50) NOT NULL,
//    email VARCHAR(50) NOT NULL,
//    phone_number VARCHAR(50) NOT NULL,
//    gender VARCHAR(50) NOT NULL,
//    city VARCHAR(50) NOT NULL,
//    problem_desc TEXT NOT NULL,
//    filename VARCHAR(255)
//);";
    $q = "INSERT INTO form_message(username, email, phone_number, gender, city, problem_desc, filename)
            VALUES (
                   '" . $username . "',
                    '" . $email . "',
                    '" . $phone_number . "',
                    '" . $gender . "',
                    '" . $city . "',
                    '" . $problem_desc . "',
                    '" . $filename . "'
              );";

    mysqli_query($mysqli, $q);

    mysqli_close($mysqli);

    echo 'success!';
}