<?php

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

    public function edin($newContent)
    {
        $this->content = $newContent;
    }

    public function changeAuthor($newAuthor)
    {
        $this->author = $newAuthor;
    }

    public function rename($newTitle)
    {
        $this->title = $newTitle;
    }

    public function __toString()
    {
        return "$this->title - $this->content: $this->author";
    }
}

$articleInfo = explode(', ', readline());
$article = new Article($articleInfo[0], $articleInfo[1], $articleInfo[2]);

$numberCommands = intval(readline());

for ($i = 0; $i < $numberCommands; $i++) {
    $commandData = explode(": ", readline());
    $currCommand = $commandData[0];
    $newArticleInfo = $commandData[1];
    if ($currCommand == 'Edit') {
        $article->edin($newArticleInfo);
    } else if ($currCommand == 'ChangeAuthor') {
        $article->changeAuthor($newArticleInfo);
    } else {
        $article->rename($newArticleInfo);
    }
}

echo $article;