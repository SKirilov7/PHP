<?php
$username = readline();
$password = strrev($username);
$try_counter = 1;
$enteredPassword = readline();
while ($password != $enteredPassword && $try_counter < 4){
    $try_counter++;
    $enteredPassword = readline();
    echo 'Incorrect password. Try again.'.PHP_EOL;
}
if ($try_counter >= 4){
    echo "User $username blocked!";
};
if ($enteredPassword === $password){
    echo "User $username logged in.";
};