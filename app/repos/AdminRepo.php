<?php
declare(strict_types=1);

namespace App\Repos;

use App\Helpers\DbConnection;
use mysqli_result;

require_once __DIR__ . '/../conf/db_config.php';

class AdminRepo
{
    public static function createTableIfNotExists(DbConnection $conn)
    {
        $query = $conn->getMySqli()->prepare("
                CREATE TABLE IF NOT EXISTS form_admin
                (
                    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
                    email VARCHAR(50) NOT NULL UNIQUE,
                    password VARCHAR(255) NOT NULL
                );
            ");
        $query->execute();
        $query->close();
    }

    public static function register(DbConnection $conn, array $formAdmin)
    {
        $query = $conn->getMySqli()->prepare("
                INSERT INTO form_admin(email, password)
                    VALUES (?, ?);
             ");

        $query->bind_param('ss', $formAdmin['email'], $formAdmin['password']);
        $query->execute();
        $query->close();
    }
}