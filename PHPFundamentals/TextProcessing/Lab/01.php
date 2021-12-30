<?php
$searching = readline();
$string = readline();
$count = 1;

while ($count > 0) {
    $string = str_replace($searching, '', $string, $count);
}

echo $string;