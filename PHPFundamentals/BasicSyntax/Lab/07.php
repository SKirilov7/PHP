<?php
$typeOfDay = readline();
$age = intval(readline());
$ticketPrice = 0;

if ($typeOfDay === 'Weekday'){
    if ($age >=0 and $age <= 18) {
        $ticketPrice = '12$';
    } else if (18 < $age and $age <= 64){
        $ticketPrice = '18$';
    } else if (64 < $age and $age <= 122){
        $ticketPrice = '12$';
    }else{
        $ticketPrice = 'Error!';
    };
}else if ($typeOfDay == 'Weekend'){
    if ($age >=0 and $age <= 18) {
        $ticketPrice = '15$';
    } else if (18 < $age and $age <= 64){
        $ticketPrice = '20$';
    } else if (64 < $age and $age <= 122) {
        $ticketPrice = '15$';
    }else{
            $ticketPrice = 'Error!';
    };
}else if ($typeOfDay == 'Holiday') {
    if ($age >= 0 and $age <= 18) {
        $ticketPrice = '5$';
    } else if (18 < $age and $age <= 64) {
        $ticketPrice = '12$';
    } else if (64 < $age and $age <= 122) {
        $ticketPrice = '10$';
    }else{
        $ticketPrice = 'Error!';
    };
} else {
    $ticketPrice = 'Error!';
};
echo $ticketPrice;