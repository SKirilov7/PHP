<?php
$arrNumbers = array_map('intval', explode(' ',readline()));
$sum = 0;
foreach ($arrNumbers as $item){
    if ($item % 2 == 0){
        $sum += $item;
    };
};
echo $sum;