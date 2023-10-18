<?php
declare(strict_types=1);

namespace App\Helpers;

use mysqli;

class DbConnection
{
    /**
     * @var string Название хоста в СУБД ('localhost')
     */
    private string $dbHost;

    /**
     * @var string Логин пользователя СУБД ('root')
     */
    private string $dbUsername;

    /**
     * @var string Пароль пользователя СУБД ('root')
     */
    private string $dbPassword;

    /**
     * @var string Название БД ('simtech_dev_app')
     */
    private string $dbDatabase;

    /**
     * @var int Порт СУБД ('8080')
     */
    private int $dbPort;

    private mysqli $mysqli;

    /**
     * Конструктор для всех параметров
     * @param string $dbHost Название хоста СУБД
     * @param int $dbPort Порт СУБД
     * @param string $dbUsername Логин пользователя СУБД
     * @param string $dbPassword Пароль пользователя СУБД
     * @param string $dbDatabase Название БД
     */
    public function __construct(string $dbHost, string $dbUsername, string $dbPassword, string $dbDatabase, int $dbPort)
    {
        $this->dbHost = $dbHost;
        $this->dbUsername = $dbUsername;
        $this->dbPassword = $dbPassword;
        $this->dbDatabase = $dbDatabase;
        $this->dbPort = $dbPort;
    }


    /**
     * Геттер для названия хоста
     * @return string Возвращает название хоста
     */
    public function getDbHost(): string
    {
        return $this->dbHost;
    }

    /**
     * Геттер для порта СУБД
     * @return int Возвращает порт хоста
     */
    public function getDbPort(): int
    {
        return $this->dbPort;
    }

    /**
     * Геттер для имени пользователя СУБД
     * @return string Возвращает логин пользователя СУБД
     */
    public function getDbUsername(): string
    {
        return $this->dbUsername;
    }

    /**
     * Геттер для пароля пользователя СУБД
     * @return string Возвращает пароль пользователя СУБД
     */
    public function getDbPassword(): string
    {
        return $this->dbPassword;
    }

    /**
     * Геттер для названия БД пользователя СУБД
     * @return string Возвращает название БД пользователя СУБД
     */
    public function getDbDatabase(): string
    {
        return $this->dbDatabase;
    }

    public function getMySqli(): mysqli {
        return $this->mysqli;
    }

    public function connectMySqli(string $dbHost, string $dbUsername,
                                  string $dbPassword, string $dbDatabase,
                                  int    $dbPort)
    {
        $this->mysqli = new mysqli
        (
            $dbHost,
            $dbUsername,
            $dbPassword,
            $dbDatabase,
            $dbPort
        );
        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
    }
}
