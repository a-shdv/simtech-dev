<?php
declare(strict_types=1);

namespace App\Repos;

use App\Helpers\DbConnection;
use mysqli_result;

require_once __DIR__ . '/../conf/db_config.php';

class MessageRepo
{

    public static function createTable(DbConnection $conn)
    {
        $query = $conn->getMySqli()->prepare("
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

    public static function insertTable(DbConnection $conn, array $formMessage)
    {
        // Добавление данных в таблицу
        $query = $conn->getMySqli()->prepare("
                INSERT INTO form_message(username, email, phone_number, gender, city, problem_desc, filename)
                    VALUES (?, ?, ?, ?, ?, ?, ?);
             ");
        // 7 вместо знаков вопросов выше будут передаваться 7 строк ('sssssss')
        $query->bind_param('sssssss',
            $formMessage['username'], $formMessage['email'],
            $formMessage['phone_number'], $formMessage['gender'],
            $formMessage['city'], $formMessage['problem_desc'],
            $formMessage['filename']
        );
        $query->execute();
        $query->close();
    }

    public static function countRowsTotalTable(DbConnection $conn): int
    {
        $query = $conn->getMySqli()->query("SELECT COUNT(*) FROM form_message;");
        $rowsTotal = $query->fetch_row()[0];
        $query->close();
        return intval($rowsTotal);
    }

    public static function paginateTable(DbConnection $conn, $currentPage, int $numOfMessagesDesired): mysqli_result
    {
        $query = $conn->getMySqli()->prepare("SELECT * FROM form_message LIMIT " . $numOfMessagesDesired .
            " OFFSET " . ($currentPage * $numOfMessagesDesired));
        $query->execute();
        $paginatedTable = $query->get_result();
        $query->close();
        return $paginatedTable;
    }

    public static function establishDbConn(DbConnection $conn)
    {
        $conn->connectMySqli
        (
            $conn->getDbHost(), $conn->getDbUsername(),
            $conn->getDbPassword(), $conn->getDbDatabase(),
            $conn->getDbPort()
        );
    }

    public static function closeDbConn(DbConnection $conn)
    {
        $conn->getMySqli()->close();
    }
}