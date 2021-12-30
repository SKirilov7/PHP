<?php
$bannedWords = explode(', ', readline());
$text = readline();

foreach ($bannedWords as $word) {
    $replace = str_repeat('*', strlen($word));
    $text = str_replace($word, $replace, $text);
}

echo $text;