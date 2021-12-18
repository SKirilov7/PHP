<?php
$groupNumber = intval(readline());
$groupType = readline();
$daysOfWeek = readline();
$price = 0;

switch ($groupType) {
    case 'Students':
        if ($daysOfWeek == 'Friday') {
            $price = 8.45;
        } else if ($daysOfWeek == 'Sunday') {
            $price = 10.46;
        } else if ($daysOfWeek == 'Saturday') {
            $price = 9.80;
        };
        break;
    case 'Business':
        if ($daysOfWeek == 'Friday') {
            $price = 10.90;
        } else if ($daysOfWeek == 'Sunday') {
            $price = 16;
        } else if ($daysOfWeek == 'Saturday') {
            $price = 15.60;
        };
        break;
    case 'Regular':
        if ($daysOfWeek == 'Friday') {
            $price = 15;
        } else if ($daysOfWeek == 'Sunday') {
            $price = 22.50;
        } else if ($daysOfWeek == 'Saturday') {
            $price = 20;
        };
        break;
};

if ($groupType == 'Business' && $groupNumber >= 100) {
    $groupNumber -= 10;
}
$totalPrice = $price * $groupNumber;


if ($groupType == 'Students' && $groupNumber >= 30) {
    $totalPrice *= 0.85;
};

if ($groupType == 'Regular' && $groupNumber >= 10 && $groupNumber <= 20) {
    $totalPrice *= 0.95;
};

printf('Total price: %.2f', $totalPrice);