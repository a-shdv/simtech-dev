<?php
declare(strict_types=1);

namespace App\Repos;

require_once __DIR__ . '/../db_config.php';

class MessageRepo
{
    public static function createTable()
    {
        // Создание таблицы
        global $mysqli;
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
        $query->close();
    }

    public static function insertTable(array $formMessage)
    {
        global $mysqli;
        // Добавление данных в таблицу
        $query = $mysqli->prepare("
                INSERT INTO form_message(username, email, phone_number, gender, city, problem_desc, filename)
                    VALUES (?, ?, ?, ?, ?, ?, ?);
             ");
        // 7 вместо знаков вопросов выше будут передаваться 7 строк ('sssssss')
        $query->bind_param('sssssss',
            $formMessage['username'], $formMessage['email'],
            $formMessage['phone_number'], $formMessage['gender'],
            $formMessage['city'], $formMessage['problem_desc'],
            $formMessage['filename']);
        echo 'test';
        $query->execute();
        $query->close();
    }

    public static function closeDbConnection() {
        global $mysqli;
        $mysqli->close();
    }
}