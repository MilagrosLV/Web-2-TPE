<?php
require_once "./app/models/BooksModel.php";
require_once "./app/models/DevsModel.php";
require_once "./app/views/BooksView.php";
require_once "./app/views/ErrorView.php";
require_once "./app/helpers/AuxHelper.php";

class GamesController {
    private $BooksModel;
    private $devsModel;
    private $view;

    public function __construct() {
        $this->BooksModel = new BooksModel();
        $this->devsModel = new DevsModel();
        $this->view = new BooksView();
    }

    public function showBooks($devId = -1) {
        if($devId == -1) {
            $Books = $this->BooksModel->getBooks();
        } else {
            $Books = $this->BooksModel->getBooksByDevId($devId);
        }
        $devs = $this->devsModel->getDevs();
        foreach($Books as $Book) {
            $Book->fechaLanzamiento = AuxHelper::reformatDate($Book->fechaLanzamiento);
        }
        $this->view->showBooks($Books, $devs);
    }

    public function showAddBook($message = null) {
        $devs = $this->devsModel->getDevs();
        $this->view->showAddBook($devs, $message);
    }

    public function addNewBook() {
        if (empty($_POST['nombreLibro']) || empty($_POST['fechaLanzamiento']) || empty($_POST['descripcionLibro']) || empty($_POST['imagen'])) {
            $this->showAddBook('Faltan completar campos');
        } elseif (AuthHelper::isLogged()) {
            $this->BooksModel->addBook();
            header('Location: ' . BASE_URL);
        } else {
            header('Location: ' . BASE_URL);
        }
    }

    public function showBookById($id) {
        $Book = $this->BooksModel->getBookById($id);
        $Book->fechaLanzamiento = AuxHelper::reformatDate($Book->fechaLanzamiento);
        if($Book) {
            $this->view->showBook($Book);
        } else {
            $ErrorView = new ErrorView();
            $ErrorView->showError('El libro seleccionado no existe.');
        }
    }

    public function deleteBook($id) {
        if (AuthHelper::isLogged()) {
            $this->booksModel->deleteBook($id);
        }
        header('Location: ' . BASE_URL);
    }

    public function editBook($id) {
        $Book = $this->BooksModel->getBookById($id);
        $devs = $this->devsModel->getDevs();
        $this->view->showEditBook($book, $devs);
    }

    public function bookEdited($id) {
        if (AuthHelper::isLogged()) {
            $this->booksModel->editBook($id);
        }
        header('Location: ' . BASE_URL);
    }
}