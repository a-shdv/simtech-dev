<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/admin_register.php';

$smarty = new Smarty();
$smarty->setCompileDir(__DIR__ . '/smarty/templates_c');
$smarty->setCacheDir(__DIR__ . '/smarty/cache');
$smarty->setConfigDir(__DIR__ . '/smarty/configs');

$smarty->assign('is_logged_in', $_SESSION['is_logged_in']);

try {
    $smarty->display(__DIR__ . '/templates/admin-register.tpl');
} catch (SmartyException $e) {
    echo 'Could not display ' . __DIR__ . '/templates/admin-register.tpl';
}
