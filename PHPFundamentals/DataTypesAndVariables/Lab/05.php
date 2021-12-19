<?php
$number = readline();


for ($i = 1; $i <= intval($number); $i++ ){
    $currNumberSum = 0;
    $i = strval($i);
    for ($index = 0; $index < strlen($i); $index++ ){
        $currNumberSum += intval($i[$index]);
    }
    if ($currNumberSum === 5 || $currNumberSum === 7 || $currNumberSum === 11){
        echo "$i -> True".PHP_EOL;
    } else {
        echo "$i -> False".PHP_EOL;
    }
}