<?php
function checkIsValidUsername($username){
    if (!(strlen($username) >= 3 && strlen($username) <= 16)){
        return false;
    } else if (!preg_match('/^[A-Za-z0-9-_]+$/', $username)) {
        return false;
    }
    return true;
}

$usernames = explode(', ', readline());

foreach ($usernames as $uName){
    if (checkIsValidUsername($uName)){
        echo $uName.PHP_EOL;
    }
}