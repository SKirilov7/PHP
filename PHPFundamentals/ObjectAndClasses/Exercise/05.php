<?php

class ArticleCollections
{
    private $articles;

    public function __construct()
    {
        $this->articles = [];
    }

    public function addArticle($article)
    {
        $this->articles[] = $article;
    }

    public function getArticles()
    {
        return $this->articles;
    }

}

class Article
{
    private $title;
    private $content;
    private $author;

    public function __construct($title, $content, $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }


    public function __toString()
    {
        return "$this->title - $this->content: $this->author";
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getAuthor()
    {
        return $this->author;
    }
}

$collectionsOfArticles = new ArticleCollections();

$numberCommands = intval(readline());

for ($i = 0; $i < $numberCommands; $i++) {
    $articleInfo = explode(", ", readline());
    $newArticle = new Article($articleInfo[0], $articleInfo[1], $articleInfo[2]);
    $collectionsOfArticles->addArticle($newArticle);
}

$criteriaToOrder = readline();
$articles = $collectionsOfArticles->getArticles();


function sortByCriteria(&$articles, $criteria)
{
    uksort($articles, function ($key1, $key2) use ($articles, $criteria) {
        $first = '';
        $second = '';
        if ($criteria == 'title') {
            $first = $articles[$key1]->getTitle();
            $second = $articles[$key2]->getTitle();
        } else if ($criteria == 'author') {
            $first = $articles[$key1]->getAuthor();
            $second = $articles[$key2]->getAuthor();
        } else {
            $first = $articles[$key1]->getContent();
            $second = $articles[$key2]->getContent();
        }
      return $first <=> $second;
    });
}
sortByCriteria($articles, $criteriaToOrder);

foreach($articles as $article){
    echo $article . PHP_EOL;
}