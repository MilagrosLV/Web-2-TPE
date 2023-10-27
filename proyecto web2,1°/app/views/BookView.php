<?php

class BookView {
    public function showBooks($Books, $devs) {
        require './templates/BooksList.phtml';
    }

    public function showBook($Book) {
        require './templates/Book.phtml';
    }

    public function showAddBook($devs, $message) {
        require './templates/addBook.phtml';
    }

    public function showEditBook($Book, $devs) {
        require './templates/editBook.phtml';
    }
}