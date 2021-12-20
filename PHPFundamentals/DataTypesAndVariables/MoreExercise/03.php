<?php
$firstNum = floatval(readline());
$secondNum = floatval(readline());

$diff = abs($firstNum - $secondNum);

if ($diff <= 0.000001){
    echo 'True';
} else {
    echo 'False';
}