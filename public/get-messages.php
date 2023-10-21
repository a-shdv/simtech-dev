<?php
session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/get_messages.php';
require_once __DIR__ . '/../app/admin_login.php';

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
$smarty->assign('is_logged_in', $_SESSION['is_logged_in']);
$smarty->assign('admin_email', $_SESSION['admin']['email']);
try {
    if ($_SESSION['is_logged_in'] == 'logged_in') {
        $smarty->display(__DIR__ . '/templates/get-messages.tpl');
    } else {
        header('Location: admin-login.php');
    }
} catch (SmartyException $e) {
    echo 'Could not display ' . __DIR__ . '/templates/get-messages.tpl';
}
