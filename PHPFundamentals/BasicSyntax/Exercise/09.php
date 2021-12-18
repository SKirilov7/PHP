<?php
$moneyAvailable = intval(readline());
$numberStudents = intval(readline());
$priceSingleLightSaber = floatval(readline());
$priceSingleRobe = floatval(readline());
$priceSingleBelt = floatval(readline());

$totalPriceLightSabers = ceil($numberStudents * 1.1) * $priceSingleLightSaber;
$numberFreeBelts = floor($numberStudents / 6);
$totalPriceBelts = ($numberStudents - $numberFreeBelts) * $priceSingleBelt;
$totalRobesPrice = $numberStudents * $priceSingleRobe;
$totalSum = $totalPriceLightSabers + $totalPriceBelts + $totalRobesPrice;

if ($moneyAvailable >= $totalSum){
    printf("The money is enough - it would cost %.2flv.", $totalSum);
} else {
    $moneyNeeded = abs($totalSum - $moneyAvailable);
    printf( "Ivan Cho will need %.2flv more.", $moneyNeeded);
};