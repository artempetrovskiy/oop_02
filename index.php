<?php

define('PUBLIC_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/public');

//var_dump($_SERVER);

$template = isset($_GET['page']) ? $_GET['page'] : 'home';

if (!file_exists(__DIR__ . '/templates/home.php')) {
    $template = '404';
}

require_once (__DIR__ . '/templates/home.php');
