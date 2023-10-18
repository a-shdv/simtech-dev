<?php

require_once __DIR__ . '/../libs/Smarty.class.php';
require_once __DIR__ . '/../app/get_messages.php';

global $table;
global $pagesTotal;
global $currentPage;

$smarty = new Smarty();

$smarty->assign('table', $table);

$smarty->assign('currentPage', $currentPage);
$smarty->assign('pagesTotal', $pagesTotal);

$smarty->display(__DIR__ . '/templates/get-messages.tpl');
