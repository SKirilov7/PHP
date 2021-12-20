<?php
$firstNum = intval(readline());
$secondNum = intval(readline());

$temporaryFirst = $firstNum;
echo 'Before:'.PHP_EOL;
echo "a = $firstNum".PHP_EOL;
echo "b = $secondNum".PHP_EOL;
$firstNum = $secondNum;
$secondNum = $temporaryFirst;
echo 'After:'.PHP_EOL;
echo "a = $firstNum".PHP_EOL;
echo "b = $secondNum".PHP_EOL;