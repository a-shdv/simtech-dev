<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/admin_login.php';
require_once __DIR__ . '/../app/admin_register.php';

$smarty = new Smarty();
$smarty->setCompileDir(__DIR__ . '/smarty/templates_c');
$smarty->setCacheDir(__DIR__ . '/smarty/cache');
$smarty->setConfigDir(__DIR__ . '/smarty/configs');

$smarty->assign('is_logged_in', $_SESSION['is_logged_in']);

if (isset($_SESSION['registration_success'])) {
    $smarty->assign('registration_success', $_SESSION['registration_success']);
    unset($_SESSION['registration_success']);
}

if (isset($_SESSION['invalid_credentials'])) {
    $smarty->assign('invalid_credentials', $_SESSION['invalid_credentials']);
    unset($_SESSION['invalid_credentials']);
}

$smarty->display(__DIR__ . '/templates/admin-login.tpl');
