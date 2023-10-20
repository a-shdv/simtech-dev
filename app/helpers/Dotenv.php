<?php
declare(strict_types=1);

namespace App\Helpers;

class Dotenv
{
    /**
     * Путь к папке, в которой хранится .env файл
     * @var string Путь к .env файлу
     */
    private string $path;

    /** Конструктор для всех параметров
     * @param string $path Путь к .env файлу
     */
    public function __construct(string $path)
    {
        if (!file_exists($path)) {
            printf('%s не существует: ', $path);;
        }
        $this->path = $path;
    }

    /** Загрузка .env файла
     * @return void
     */
    public function load(): void
    {
        if (!is_readable($this->path)) {
            printf('не удалось прочитать файл %s', $this->path);
        }

        $lines = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) {
                continue;
            }

            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);

            if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
                putenv(sprintf('%s=%s', $name, $value));
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
    }
}


