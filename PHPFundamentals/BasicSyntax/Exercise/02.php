<?php
$number = intval(readline());
// Using arrays,in the basic syntax they want if statements or switch cases,but it makes my code shorter and easier.
$numbersDividers = array(10, 7, 6, 3, 2);
$divided = false;
for ($i = 0; $i < count($numbersDividers); $i++) {
    if ($number % $numbersDividers[$i] == 0) {
        echo "The number is divisible by $numbersDividers[$i]";
        $divided = True;
        break;
    };
};
if (!$divided) {
    echo 'Not divisible';
};
