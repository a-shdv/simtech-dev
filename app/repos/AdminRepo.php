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

    public static function isAdminExists(DbConnection $conn, string $email): bool
    {
        $query = $conn->getMySqli()->prepare("SELECT * FROM form_admin WHERE email = ?");
        $query->bind_param('s', $email);
        $query->execute();

        $is_exists = $query->fetch();

        $query->close();

        if ($is_exists) {
            return true;
        }
        return false;
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

    public static function login(DbConnection $conn, array $formAdmin): bool
    {
        $email = $formAdmin['email'];
        $password = $formAdmin['password'];

        $query = $conn->getMySqli()->query("
                SELECT * FROM form_admin
                    WHERE email = '$email'");

        if ($query->num_rows > 0) {
            $adminDb = $query->fetch_row();
            $is_verified = password_verify($password, $adminDb[2]); // $adminDb[2] = $password from db
            if ($is_verified) {
                $query->close();
                return true;
            }
        }

        $query->close();
        return false;
    }
}