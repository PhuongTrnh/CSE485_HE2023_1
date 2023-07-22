<?php
class Book implements IBook {
    private $name;
    private $author;
    private $publisher;
    private $publicationYear;
    private $ISBN;
    private $chapters;
  
    public function __construct($name, $author, $publisher, $publicationYear, $ISBN, $chapters) {
        $this->name = $name;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->publicationYear = $publicationYear;
        $this->ISBN = $ISBN;
        $this->chapters = $chapters;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPublisher() {
        return $this->publisher;
    }

    public function getPublicationYear() {
        return $this->publicationYear;
    }

    public function getISBN() {
        return $this->ISBN;
    }

    public function getChapters() {
        return $this->chapters;
    }
}
?>