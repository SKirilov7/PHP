<?php

function raiseToPower($num, $pow){
    return $num ** $pow;
}

$number = intval(readline());
$power = intval(readline());
echo raiseToPower($number, $power);