<?php
function makeMathOperations($operator, $num1, $num2)
{
    switch ($operator) {
        case "*":
            return $num1 * $num2;
        case "/":
            return $num1 / $num2;
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        default:
            return 'Please input a valid operator.';
    }
}

$firstNum = intval(readline());
$operator = readline();
$secondNum = intval(readline());
echo number_format(makeMathOperations($operator, $firstNum, $secondNum), 2);
