<?php
$bombs = array_map('intval', explode(' ', readline()));
$bombAndPower = array_map('intval', explode(' ', readline()));
$bombExploding = $bombAndPower[0];
$power = $bombAndPower[1];

$i = 0;
while ($i < count($bombs)) {
    if ($bombs[$i] == $bombExploding) {
        $startingIndex = $i - $power;
        $length = $power * 2 + 1;
        if ($startingIndex <= 0) {
            array_splice($bombs, 0, $length);
        } else {
            array_splice($bombs, $startingIndex, $length);
        }
        $i = 0;
    }
    $i++;
}

echo array_sum($bombs);