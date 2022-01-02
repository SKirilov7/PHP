<?php

class Book
{
    private $title;
    private $author;
    private $publisher;
    private $releaseDate;
    private $isbn;
    private $price;

    public function __construct($title, $author, $publisher, $releaseDate, $isbn, $price){
        $this->title =$title;
        $this->author = $author;
        $this->publisher= $publisher;
        $this->releaseDate = $releaseDate;
        $this->isbn=$isbn;
        $this->price = $price;
    }
    public function getAuthorName(){
        return $this->author;
    }
    public function getBookPrice(){
        return $this->price;
    }
}

class Library {
    private $name;
    private $listOfBooks;

    public function __construct($name){
        $this->name = $name;
        $this->listOfBooks = [];
    }
    public function addBook($book){
        $this->listOfBooks[] = $book;
    }
    public function getTotalPricesBooksByAuthor($authorName){
        $sum = 0;
        foreach ($this->listOfBooks as $bookInfo){
            if ($authorName == $bookInfo->getAuthorName()){
                $sum += $bookInfo->getBookPrice();
            }
        }
        return $sum;
    }
    public function getAllAuthors(){
        $authors = [];
        foreach ($this->listOfBooks as $bookInfo){
            if (!in_array($bookInfo->getAuthorName(), $authors)){
                $authors[] = $bookInfo->getAuthorName();
            }
        }
        return $authors;
    }

}

$numberBooks = intval(readline());
$library = new Library('Nice Library');

for ($i = 0; $i < $numberBooks; $i ++){
    $bookInfo = explode(' ',readline());
    $newBook = new Book($bookInfo[0], $bookInfo[1], $bookInfo[2], $bookInfo[3], $bookInfo[4], floatval($bookInfo[5]));
    $library->addBook($newBook);
}

$listOfAuthors = $library->getAllAuthors();
$authorsIncomes = [];
foreach($listOfAuthors as $author){
    $authorsIncomes[$author] = $library->getTotalPricesBooksByAuthor($author);
}

uksort($authorsIncomes, function($key1, $key2) use ($authorsIncomes){
    $price1 = $authorsIncomes[$key1];
    $price2 = $authorsIncomes[$key2];
    if ($price2 == $price1){
        return $key1 <=> $key2;
    }
    return $price2 <=>$price1;
});

foreach($authorsIncomes as $author => $income){
    printf("%s -> %.2f", $author, $income);
    echo PHP_EOL;
}

