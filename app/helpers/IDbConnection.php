<?php
declare(strict_types=1);

interface IDbConnection
{
    function connect(string $dbHost, string $dbUsername, string $dbPassword, string $dbDatabase, int $dbPort): void;
}