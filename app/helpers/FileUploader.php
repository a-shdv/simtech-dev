<?php
declare(strict_types=1);

namespace App\Helpers;

class FileUploader
{
    /**
     * Загрузка файла
     * @param array $file Передавое название файла
     * @return void
     */
    public static function uploadFile(array $file)
    {
        if (!empty($file)) {
            // Создание папки для загружаемых изображенмй
            $uploadDir = __DIR__ . '/../../public/img/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir);
            }

            var_dump($file['tmp_name']);
            $filePath = $uploadDir . $file['name'];

            if (!move_uploaded_file($file['tmp_name'], $filePath)) {
                echo 'File could not be uploaded!';
            }
        }
    }

    /**
     * Шифрование файла
     * @param string $filename Передаваемое название файла
     * @return string
     */
    public static function encodeFilename(string $filename): string
    {
        $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
        return uniqid() . '_' . md5(uniqid()) . '.' . $fileExtension;
    }
}