<?php

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/get_messages.php';

global $paginatedTable;
global $pagesTotal;
global $currentPage;

$smarty = new Smarty();
$smarty->setCompileDir(__DIR__ . '/smarty/templates_c');
$smarty->setCacheDir(__DIR__ . '/smarty/cache');
$smarty->setConfigDir(__DIR__ . '/smarty/configs');

$smarty->assign('table', $paginatedTable);

$smarty->assign('currentPage', $currentPage);
$smarty->assign('pagesTotal', $pagesTotal);

try {
    $smarty->display(__DIR__ . '/templates/get-messages.tpl');
} catch (SmartyException $e) {
    echo 'could not display ' . __DIR__ . '/templates/get-messages.tpl';
}