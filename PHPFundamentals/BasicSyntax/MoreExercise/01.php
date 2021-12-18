<?php
$first_num = intval(readline());
$second_num = intval(readline());
$third_num = intval(readline());
$numbers = array();
array_push($numbers, $first_num, $second_num, $third_num);
rsort($numbers);
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . PHP_EOL;
};
