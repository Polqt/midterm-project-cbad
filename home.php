<?php
require 'functions.php';
session_start();

if (!isset($_SESSION['name'])) {
    header('Location: index.php');
    exit;
}


$title = 'Home';
$icon = '';
$style = 'public/styles/main.css';
$main_style = 'public/styles/home.css';
$script = 'public/js/script.js';

require 'views/home.view.php';
