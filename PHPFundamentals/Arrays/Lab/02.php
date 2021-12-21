<?php
$numbersCount = intval(readline());
$array = [];

for ($i = 0; $i < $numbersCount; $i++){
    $array[] = intval(readline());
};

for ($indx = ($numbersCount) - 1; $indx >= 0; $indx--){
    echo "$array[$indx] ";
};