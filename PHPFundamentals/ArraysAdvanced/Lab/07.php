<?php

$firstArr = explode(' ', readline());
$secondArr = explode(' ', readline());

$minCount = (count($firstArr) < count($secondArr)) ? count($firstArr) : count($secondArr);
$biggerArray = (count($firstArr) > count($secondArr)) ? $firstArr: $secondArr;

$indexToAdd = 0;
$newArr = [];
for ($i = 0; $i < $minCount * 2 ; $i++) {
    if ($i % 2 == 0 || $i == 0) {
        $newArr[] = $firstArr[$indexToAdd];
    } else {
        $newArr[] = $secondArr[$indexToAdd];
        $indexToAdd++;
    }

}


$lastElements = array_splice($biggerArray, $minCount, count($biggerArray));
$newArr = array_merge($newArr, $lastElements);
echo implode(' ', $newArr);