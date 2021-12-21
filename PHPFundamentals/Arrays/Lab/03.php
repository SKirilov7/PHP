<?php
$arrNumbers = explode(' ', readline());

for ($i = 0; $i < count($arrNumbers); $i++){
    $roundedNum = round(floatval($arrNumbers[$i]));
    $floatingNum = number_format(floatval($arrNumbers[$i]), 2);
    echo "$floatingNum => $roundedNum".PHP_EOL;
};