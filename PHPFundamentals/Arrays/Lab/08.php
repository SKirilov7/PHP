<?php
$arrayOfInts = array_map('intval', explode(' ', readline()));

while (count($arrayOfInts) > 1){
    $temporaryArray = [];
    for ($i = 0; $i < count($arrayOfInts) - 1; $i++){
        $temporaryArray[] = $arrayOfInts[$i] + $arrayOfInts[$i + 1];
    };
    $arrayOfInts = $temporaryArray;
};

echo $arrayOfInts[0];