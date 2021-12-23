<?php
function printMatrix($n)
{
    for ($row = 0; $row < $n; $row++) {
        for ($col = 0; $col < $n; $col++) {
            echo "$n ";
        }
        echo ' ' . PHP_EOL;
    }
}


$n = intval(readline());
printMatrix($n);