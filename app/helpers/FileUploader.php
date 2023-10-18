<?php
declare(strict_types=1);

namespace App\Helpers;

class FileUploader
{
    public static function uploadFile(array $file)
    {
        if (!empty($file)) {
            // Создание папки для загружаемых изображенмй
            $uploadDir = '../public/img/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir);
            }

            $filePath = $uploadDir . $file['name'];
            if (!move_uploaded_file($file['tmp_name'], $filePath)) {
                echo 'File could not be uploaded!';
            }
        }
    }

    public static function encodeFilename(string $filename): string
    {
        $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
        return uniqid() . '_' . md5(uniqid()) . '.' . $fileExtension;
    }
}