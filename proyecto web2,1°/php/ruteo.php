<?php
require_once 'bienvenido.php';
require_once 'bibloteca.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);
    
switch ($params[0]) {
    case 'home':
        showHome();
        break;
    case 'bienvenido.php':
        showNoticia($params[1]);
        break;
    case 'bibloteca.php':
        if (empty($params[1])) {
            showAbout();
        } else {
            showAbout($params[1]);
        }
        break;
    default:
        echo "404 not found";
        break;
}
