<?php
$text = readline();
$searchedWord = readline();

$text = explode('%', str_replace([',', '.', ' ', '?', '!'], '%', $text));
$count = array_count_values($text);
$count = $count[$searchedWord];

echo $count;