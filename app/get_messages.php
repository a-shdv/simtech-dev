<?php

require_once __DIR__ . '/db_config.php';

global $mysqli;

$query = $mysqli->prepare("SELECT * FROM form_message");
$query->execute();

$table = $query->get_result();

$query->close();
$mysqli->close();