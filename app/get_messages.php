<?php

use App\Repos\MessageRepo;

require_once __DIR__ . '/repos/MessageRepo.php';
require_once __DIR__ . '/conf/db_config.php';

global $conn;

$currentPage = $_GET['page']; // получение текущей страницы
$numOfMessagesDesired = 5; // количество сообщений, которое будет выводиться на одной странице

MessageRepo::establishDbConn($conn);

$rowsTotal = MessageRepo::countRowsTotalTable($conn); // общее количество строк в таблице
$pagesTotal = ceil($rowsTotal / $numOfMessagesDesired); // общее количество выводимых страниц (а также округляем в большую сторону

// Получение таблицы с готовой пагинацией
$paginatedTable = MessageRepo::paginateTable($conn, $currentPage, $numOfMessagesDesired);

MessageRepo::closeDbConn($conn);