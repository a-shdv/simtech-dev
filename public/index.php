<?php
require __DIR__ . '/../vendor/autoload.php';

$smarty = new Smarty();
$smarty->setCompileDir(__DIR__ . '/smarty/templates_c');
$smarty->setCacheDir(__DIR__ . '/smarty/cache');
$smarty->setConfigDir(__DIR__ . '/smarty/configs');


try {
    $smarty->display(__DIR__ . '/templates/index.tpl');
} catch (SmartyException $e) {
    echo 'could not display ' . __DIR__ . '/templates/index.tpl';
}
