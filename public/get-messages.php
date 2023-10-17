<?php
require_once __DIR__ . '/../libs/Smarty.class.php';
require_once __DIR__ . '/../app/get_messages.php';

global $table;

$smarty = new Smarty();

$smarty->assign('table', $table);

$smarty->display(__DIR__ . '/templates/get-messages.tpl');
