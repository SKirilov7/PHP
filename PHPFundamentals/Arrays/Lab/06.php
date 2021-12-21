<?php
$arrNums = array_map('intval', explode(' ',readline()));
$evenNumsSum = 0;
$oddNumsSum = 0;

foreach ($arrNums as $item){
    if ($item % 2 == 0){
        $evenNumsSum += $item;
    } else {
        $oddNumsSum += $item;
    };
};

echo $evenNumsSum - $oddNumsSum;