<?php

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/get_messages.php';

global $paginatedTable;
global $pagesTotal;
global $currentPage;

$smarty = new Smarty();

$smarty->assign('table', $paginatedTable);

$smarty->assign('currentPage', $currentPage);
$smarty->assign('pagesTotal', $pagesTotal);

$smarty->display(__DIR__ . '/templates/get-messages.tpl');
