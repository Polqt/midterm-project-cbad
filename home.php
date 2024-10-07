<?php
session_start();

if (!isset($_SESSION['name'])) {
    header('Location: index.php');
    exit;
}


$title = 'Home';
$icon = '';
$style = 'main.css';
$script = 'script.js';

require 'views/home.view.php';
