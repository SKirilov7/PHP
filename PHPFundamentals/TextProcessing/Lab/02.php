<?php
$word = readline();

while ($word !== 'end') {
    $reversedWord = strrev($word);
    echo "$word = $reversedWord" . PHP_EOL;
    $word = readline();
}