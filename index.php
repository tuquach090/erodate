<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$path = "pages/{$page}.php";

require 'layout/header.php';

if (file_exists($path)) {
    require "{$path}";
}

require 'layout/footer.php';
