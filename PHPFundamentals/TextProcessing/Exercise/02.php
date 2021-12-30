<?php
$strings = explode(' ', readline());

$maxCountString = (strlen($strings[0]) >= strlen($strings[1])) ? $strings[0] : $strings[1];
$minCountString = (strlen($maxCountString) == strlen($strings[0])) ? $strings[1] : $strings[0];

$totalSum = 0;

for ($i = 0; $i < strlen($maxCountString); $i++) {
    if ($i < strlen($minCountString)) {
        $totalSum += ord($maxCountString[$i]) * ord($minCountString[$i]);
    } else {
        $totalSum += ord($maxCountString[$i]);
    }
}
echo $totalSum;
