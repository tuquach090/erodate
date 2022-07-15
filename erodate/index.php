<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$path = "pages/{$page}.php";

require 'layout/TheHeader.html';

if (file_exists($path)) {
    require "{$path}";
} else {
    require "./modules/404.php";
}

require 'layout/TheFooter.html';
