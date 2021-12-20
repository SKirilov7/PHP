<?php
$linesOfInput = intval(readline());

for ($i = 0; $i < $linesOfInput; $i++) {
    $biggerNum = 0;
    $biggerNumSum = 0;
    $numbers = array_map('intval', explode(' ', readline()));
    if ($numbers[0] > $numbers[1]){
        $biggerNum = $numbers[0];
    } else {
        $biggerNum = $numbers[1];
    };
    $biggerNum = strval($biggerNum);
    for ($indx = 0; $indx < strlen($biggerNum); $indx++){
        $biggerNumSum += intval($biggerNum[$indx]);
    };
    echo $biggerNumSum.PHP_EOL;
}