<?php
$text = readline();

$text = explode('%', str_replace([',', '.', ' ', '?', '!'], '%', $text));

$palindromes = [];
foreach ($text as $word) {
    if ($word == strrev($word) && ctype_alnum($word)) {
        $palindromes[] = $word;
    }
}
$palindromes = array_unique($palindromes);
natcasesort($palindromes);
echo implode(', ', $palindromes);