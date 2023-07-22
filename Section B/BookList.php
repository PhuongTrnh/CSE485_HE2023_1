<?php
class BookList {
    private $books;

    public function __construct()
    {
        $this->books = array();
    }

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function removeBook(Book $book) {
        $index = array_search($book, $this->books);
        if ($index !== false) {
            unset($this->books[$index]);
        }
    }

    public function sortBooksByAuthor() {
        usort($this->books, function ($a, $b) {
            return strcmp($a->getAuthor(), $b->getAuthor());
        });
    }

    public function sortBooksByName() {
        usort($this->books, function ($a, $b) {
            return strcmp($a->getName(), $b->getName());
        });
    }

    public function sortBooksByPublicationYear() {
        usort($this->books, function ($a, $b) {
            return $a->getPublicationYear() - $b->getPublicationYear();
        });
    }

    public function getBooks() {
        return $this->books;
    }
}
?>