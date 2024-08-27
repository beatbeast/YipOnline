<?php

require 'config.php';

$username = $_GET['username'] ?? '';
$email = $_GET['email'] ?? '';

$smarty->assign('username', $username);
$smarty->assign('email', $email);
$smarty->display('confirmation.tpl');
