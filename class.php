<?php 
    class Book {
        private $title;
        private $author;

        function setTitle ($titleValue) {
            $this->title = $titleValue;
        }
        function getTitle() {
            return $this->title;
        }

        function setAuthor ($authorValue) {
            $this->author = $authorValue;
        }
        function getAuthor() {
            return $this->author;
        }

        function getBookInfo() {
            return "Title : " . $this->getTitle() . ", Author : " . $this->getAuthor();
        }
    }

    $book1 = new Book();
    $book1->setTitle("1984");
    $book1->setAuthor("George Orwell");
    echo $book1->getBookInfo();
?>