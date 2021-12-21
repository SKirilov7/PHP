<?php
$firstArray = array_map('intval', explode(' ',readline()));
$secondArray = array_map('intval', explode(' ',readline()));
$sumArrays = 0;
$notIdentical = false;

for ($i = 0; $i < count($firstArray); $i++){
    if ($firstArray[$i] === $secondArray[$i]){
        $sumArrays += $firstArray[$i];
    } else {
        echo "Arrays are not identical. Found difference at $i index.";
        $notIdentical = true;
        break;
    };
};

if (!$notIdentical){
    echo "Arrays are identical. Sum: $sumArrays";
};
