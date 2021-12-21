<?php
$n = intval(readline());
$firstArray = [];
$secondArray = [];
$firstArrIndex = 0;
$secondArrayIndex = 1;


for ($i = 0; $i < $n; $i++) {
    $nums = explode(' ', readline());
    $firstArray[] = $nums[$firstArrIndex % 2];
    $secondArray[] = $nums[$secondArrayIndex % 2];
    $firstArrIndex++;
    $secondArrayIndex++;

};

echo implode(' ', $firstArray) . PHP_EOL;
echo implode(' ', $secondArray) . PHP_EOL;
