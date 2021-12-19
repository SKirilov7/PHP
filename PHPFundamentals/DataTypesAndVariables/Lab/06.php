<?php
$n = intval(readline());

for ($i = 97; $i < 97 + $n; $i ++){
    for ($indx = 97; $indx < 97 + $n; $indx ++){
        for ($index = 97; $index < 97 + $n; $index ++){
            $firstChar = chr($i);
            $secondChar = chr($indx);
            $thirdChar = chr($index);
            echo "$firstChar$secondChar$thirdChar".PHP_EOL;
        }
    }
}