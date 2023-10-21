<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/admin_login.php';
require_once __DIR__ . '/../app/send_email.php';
require_once __DIR__ . '/../app/conf/db_config.php';

$smarty = new Smarty();
$smarty->setCompileDir(__DIR__ . '/smarty/templates_c');
$smarty->setCacheDir(__DIR__ . '/smarty/cache');
$smarty->setConfigDir(__DIR__ . '/smarty/configs');

//$smarty->testInstall(); // проверить, подключились ли папки

$smarty->assign('is_logged_in', $_SESSION['is_logged_in']);

if (isset($_SESSION['mail_sent'])) {
    $smarty->assign('mail_sent', $_SESSION['mail_sent']);
    unset($_SESSION['mail_sent']);
}

try {
    $smarty->display(__DIR__ . '/templates/index.tpl');
} catch (SmartyException $e) {
    echo 'could not display ' . __DIR__ . '/templates/index.tpl';
}