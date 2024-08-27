<?php

require 'vendor/autoload.php';
// require_once("vendor/smarty/smarty/libs/Smarty.class.php");


// Test Smarty setup
// $smarty = new Smarty();
$smarty = new Smarty\Smarty;
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setCacheDir('cache/');
$smarty->setConfigDir('configs/');

echo "Smarty is set up correctly.";
