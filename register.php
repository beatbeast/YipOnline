<?php

require 'config.php';
require 'classes/User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = new User($username, $email, $password);

    $errors = [];
    try {
        if (!$user->validateUsername()) {
            $errors['username'] = 'Username must be alphanumeric and between 3-20 characters.';
        }
        if (!$user->validateEmail()) {
            $errors['email'] = 'Invalid email format.';
        }
        if (!$user->validatePassword()) {
            $errors['password'] = 'Password must be at least 8 characters and include at least one letter and one number.';
        }
        if ($user->isUsernameTaken()) {
            $errors['username'] = 'Username is already taken.';
        }
        if ($user->isEmailTaken()) {
            $errors['email'] = 'Email is already taken.';
        }

        if (empty($errors)) {
            $newUser = $user->createUser();
            header('Location: confirmation.php?username=' . urlencode($newUser['username']) . '&email=' . urlencode($newUser['email']));
            exit();
        } else {
            $smarty->assign('errors', $errors);
        }
    } catch (Exception $e) {
        error_log($e->getMessage());
        $smarty->assign('error', 'An unexpected error occurred. Please try again later.');
    }
}

$smarty->display('register.tpl');
