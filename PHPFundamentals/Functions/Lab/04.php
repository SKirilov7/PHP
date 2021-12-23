<?php
function printLine($startingNum, $number)
{
    for ($i = $startingNum; $i <= $number; $i++) {
        echo "$i ";
    }
    echo " " . PHP_EOL;
}


$num = intval(readline());

for ($i = 0; $i <= $num; $i++) {
    printLine(1, $i);
}

for ($i = $num - 1; $i >= 0; $i--) {
    printLine(1, $i);
}