<?php
$text = readline();

$newText = '';

for ($i = 0; $i < strlen($text); $i++) {
    $currLetter = ord($text[$i]) + 3;
    $newText .= chr($currLetter);
}
echo $newText;