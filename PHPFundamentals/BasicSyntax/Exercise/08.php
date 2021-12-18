<?php
$n = intval(readline());
for ($row= 1;$row <= $n; $row++){
    for ($col = 1; $col <= $row; $col++){
        echo "$row ";
    };
    echo PHP_EOL;
};
