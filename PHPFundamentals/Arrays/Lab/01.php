<?php
$daysInWeek = [
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
    "Sunday"
];

$numberDay = intval(readline()) - 1;

if ($numberDay >= 0 && $numberDay <= 6){
    echo $daysInWeek[$numberDay];
} else {
    echo 'Invalid day!';
};