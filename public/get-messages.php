<?php

require_once __DIR__ . '/../libs/Smarty.class.php';
require_once __DIR__ . '/../app/get_messages.php';

global $table;

$currentPage = $_GET['page'];

$smarty = new Smarty();

$smarty->assign('table', $table);

$smarty->assign('currentPage', $currentPage);
$smarty->assign('pagesTotal', $table->num_rows / 5);

$smarty->display(__DIR__ . '/templates/get-messages.tpl');
