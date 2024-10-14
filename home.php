<?php
require 'functions.php';
require 'session.php';

$title = 'Home';
$icon = '';
$style = 'public/styles/main.css';
$main_style = 'public/styles/style.css';
$script = 'public/js/home.js';
$date = 'public/js/date.js';
$main_script = 'public/js/script.js';

require 'views/home.view.php';
