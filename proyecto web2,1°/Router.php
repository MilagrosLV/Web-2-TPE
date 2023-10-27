<?php
// Hacemos un require_once de los controllers que usamos
require_once './app/controllers/BooksController.php';
require_once './app/controllers/DevsController.php';
require_once './app/controllers/ErrorController.php';
require_once './app/controllers/AuthController.php';

// Definimos la constante "BASE_URL"
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'books'; // Accion por defecto
// Verificamos que la acción exista
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}


// parseamos la accion para separar accion real de parametros
$params = explode('/', $action);

switch ($params[0]) {
    case 'books':
        $controller = new BooksController();
        if(isset($params[1]) && $params[1] == 'developer') {
            $controller->showBooks($params[2]);
        } else {
            $controller->showBooks();
        }
        break;
    case 'books':
        $controller = new BooksController();
        $controller->showBookById($params[1]);
        break;
    case 'add-book':
        $controller = new BooksController();
        $controller->showAddBook();
        break;
    case 'add-new-book':
        $controller = new BooksController();
        $controller->addNewBook();
        break;
    case 'delete-book':
        $controller = new BooksController();
        $controller->deleteBook($params[1]);
        break;
    case 'edit-book':
        $controller = new BooksController();
        $controller->editBook($params[1]);
        break;
    case 'book-edited':
        $controller = new BooksController();
        $controller->bookEdited($params[1]);
        break;
    case 'developers':
        $controller = new DevsController();
        $controller->showDevs();
        break;
    case 'add-developer':
        $controller = new DevsController();
        $controller->showAddDev();
        break;
    case 'add-new-developer':
        $controller = new DevsController();
        $controller->addNewDev();
        break;
    case 'delete-dev':
        $controller = new DevsController();
        $controller->deleteDev($params[1]);
        break;
    case 'edit-dev':
        $controller = new DevsController();
        $controller->editDev($params[1]);
        break;
    case 'dev-edited':
        $controller = new DevsController();
        $controller->devEdited($params[1]);
        break;
    case 'login':
        $controller = new AuthController();
        $controller->showLogin();
        break;
    case 'auth':
        $controller = new AuthController();
        $controller->auth();
        break;
    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;
    case 'hash':
        echo password_hash('admin', PASSWORD_DEFAULT);
        break;
    default: 
        $controller = new ErrorController();
        $controller->notFound();
        break;
}