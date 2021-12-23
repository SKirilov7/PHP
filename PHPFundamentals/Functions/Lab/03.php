<?php
function add($num1, $num2)
{
    return $num1 + $num2;
}

function subtract($num1, $num2)
{
    return $num1 - $num2;
}

function divide($num1, $num2)
{
    return $num1 / $num2;
}

function multiply($num1, $num2)
{
    return $num1 * $num2;
}


function makeMathOperations($operator, $num1, $num2)
{
    switch ($operator) {
        case 'subtract':
            return subtract($num1, $num2);
        case 'divide':
            return divide($num1, $num2);
        case 'add':
            return add($num1, $num2);
        case 'multiply':
            return multiply($num1, $num2);
        default:
            return 'Please input a valid operator.';
    }
}


$operator = readline();
$firstNum = intval(readline());
$secondNum = intval(readline());

echo makeMathOperations($operator, $firstNum, $secondNum);

