<?php

require_once __DIR__ . '/db_config.php';

global $mysqli;

$query = $mysqli->query("SELECT COUNT(*) FROM form_message;");
$numOfRows = $query->fetch_row()[0];
$pagesTotal = ceil($numOfRows / 5);
$numOfMessagesDesired = 5;

$currentPage = $_GET['page'];

$query = $mysqli->prepare("SELECT * FROM form_message LIMIT " . $numOfMessagesDesired . " OFFSET " . ($currentPage * $numOfMessagesDesired));

$query->execute();

$table = $query->get_result();

$query->close();
$mysqli->close();