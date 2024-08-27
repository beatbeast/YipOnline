<?php

require 'vendor/autoload.php';
require 'classes/Database.php';

// Smarty setup
// $smarty = new Smarty();
$smarty = new Smarty\Smarty;
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setCacheDir('cache/');
$smarty->setConfigDir('configs/');

// Database connection setup
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'yiponline');

// Create an instance of the database connection
$database = Database::getInstance();
