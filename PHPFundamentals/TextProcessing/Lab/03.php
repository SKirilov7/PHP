<?php
$arrWords = explode(' ', readline());
$string = '';
foreach ($arrWords as $word) {
    $lengthString = strlen($word);
    $string .= str_repeat($word, $lengthString);
}

echo $string;