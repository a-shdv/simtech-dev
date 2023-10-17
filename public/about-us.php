<?php
require_once __DIR__ . '/../libs/Smarty.class.php';

$smarty = new Smarty();

$smarty->display(__DIR__ . '/templates/about-us.tpl');
