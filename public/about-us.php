<?php
require __DIR__ . '/../vendor/autoload.php';

$smarty = new Smarty();

$smarty->display(__DIR__ . '/templates/about-us.tpl');
