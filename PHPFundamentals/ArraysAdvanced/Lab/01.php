<?php
$arrayNums = array_map(function ($num) {
    return ($num >= 0) ? $num : false;
}, explode(" ", readline()));

$arrayNums = array_reverse(array_filter($arrayNums));

echo (count($arrayNums) > 0) ? implode(' ', $arrayNums) : 'empty';