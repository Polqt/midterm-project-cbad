<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (!empty($name) && !empty($email)) {
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        header('Location: home.php');
        exit();
    } else {
        header('Location: views/index.views.php?error=emptyFields');
        exit();
    }
};

$title = 'Login';
$icon = '';
$style = 'public/styles/main.css';

require 'views/index.view.php';