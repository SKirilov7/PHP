<?php
$n = intval(readline());
$sum = 0;
$numbersPrinted = 0;
$startingNum = 1;
while ($numbersPrinted < $n){
    echo $startingNum.PHP_EOL;
    $sum += $startingNum;
    $startingNum += 2;
    $numbersPrinted++;
}
echo $sum;
