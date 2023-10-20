<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/admin_login.php';

$smarty = new Smarty();

$smarty->display(__DIR__ . '/templates/admin-login.tpl');
