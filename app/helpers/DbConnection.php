<?php
declare(strict_types=1);

require_once 'IDbConnection.php';

class DbConnection implements IDbConnection
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
     * Сеттер для названия хоста
     * @param string $dbHost Устанавливает значение хоста СУБД
     */
    public function setDbHost(string $dbHost): void
    {
        $this->dbHost = $dbHost;
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
     * Сеттер для порта СУБД
     * @param int $dbPort Устанавливает значение порта СУБД
     */
    public function setDbPort(int $dbPort): void
    {
        $this->dbPort = $dbPort;
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
     * Сеттер для имени пользователя СУБД
     * @param string $dbUsername Устанавливает значение логина пользователя СУБД
     */
    public function setDbUsername(string $dbUsername): void
    {
        $this->dbUsername = $dbUsername;
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
     * Сеттер для пароля пользователя СУБД
     * @param string $dbPassword Устанавливает значение пароля пользователя СУБД
     */
    public function setDbPassword(string $dbPassword): void
    {
        $this->dbPassword = $dbPassword;
    }

    /**
     * Геттер для названия БД в СУБД
     * @return string Возвращает название БД в СУБД
     */
    public function getDbDatabase(): string
    {
        return $this->dbDatabase;
    }

    /**
     * Сеттер для названия БД в СУБД
     * @param string $dbDatabase Устанавливается название БД в СУБД
     */
    public function setDbDatabase(string $dbDatabase): void
    {
        $this->dbDatabase = $dbDatabase;
    }

    function connect(string $dbHost, string $dbUsername, string $dbPassword, string $dbDatabase, int $dbPort): void
    {
        // Create connection
        $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbDatabase, $dbPort);
    }
}
