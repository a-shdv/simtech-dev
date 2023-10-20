<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/get_messages.php';
require_once __DIR__ . '/../app/admin_register.php';
require_once __DIR__ . '/../app/admin_login.php';

global $is_admin_created;

global $paginatedTable;
global $pagesTotal;
global $currentPage;

$smarty = new Smarty();

$smarty->assign('table', $paginatedTable);
$smarty->assign('currentPage', $currentPage);
$smarty->assign('pagesTotal', $pagesTotal);

//$smarty->display(__DIR__ . '/templates/admin-login.tpl');
