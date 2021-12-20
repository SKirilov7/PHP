<?php
$integer = readline();

$sum = 0;

for ($i=0; $i < strlen($integer);$i++){
    $sum += intval($integer[$i]);
};

echo $sum;