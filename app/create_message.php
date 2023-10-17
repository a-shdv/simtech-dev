<?php

require_once __DIR__ . '/db_config.php';

global $mysqli;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получение данных из формы
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phoneNumber'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $problem_desc = $_POST['problemDesc'];

    // Загрузка файла в папку
    $filepath = null;
    if (!empty($_FILES['fileUpload'])) {
        $file = $_FILES['fileUpload'];
        $originalFilename = $file['name'];

        $fileExtension = pathinfo($originalFilename, PATHINFO_EXTENSION);
        $uniqueFilename = uniqid() . '_' . md5(uniqid()) . '.' . $fileExtension;

        $filepath = __DIR__ . '/../public/img/' . $uniqueFilename;

        if (!move_uploaded_file($file['tmp_name'], $filepath)) {
            echo 'File could not be uploaded!';
        }
    }

    // SQL-скрипты
    $query = $mysqli->prepare("
                CREATE TABLE IF NOT EXISTS form_message
                (
                    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
                    username VARCHAR(50) NOT NULL,
                    email VARCHAR(50) NOT NULL,
                    phone_number VARCHAR(50) NOT NULL,
                    gender VARCHAR(50) NOT NULL,
                    city VARCHAR(50) NOT NULL,
                    problem_desc TEXT NOT NULL,
                    filename VARCHAR(255)
                );
            ");
    $query->execute();

    $query = $mysqli->prepare("
                INSERT INTO form_message(username, email, phone_number, gender, city, problem_desc, filename)
                    VALUES (?, ?, ?, ?, ?, ?, ?)
             ");
    // 1-й аргумент ('sssssss') - вместо знаков вопросов будут передаваться 7 строк
    $query->bind_param('sssssss', $username, $email, $phone_number, $gender, $city, $problem_desc, $filepath);
    $query->execute();

    $query->close();
    $mysqli->close();

    header('Location: ../public/index.php');
}
