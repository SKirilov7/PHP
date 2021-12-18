<?php
$number = readline();
$numbers_factorial = 0;
for ($i = 0; $i < strlen($number); $i++) {
    $currentFact = 1;
    for ($num = intval($number[$i]); $num > 0; $num--) {
        $currentFact *= intval($num);
    }
    $numbers_factorial += $currentFact;
};

if (intval($number) === $numbers_factorial){
    echo 'yes';
} else {
    echo 'no';
};

