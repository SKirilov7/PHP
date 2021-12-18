<?php
$country = readline();
switch ($country){
    case 'USA':
    case 'England':
        echo 'English';
        break;
    case 'Argentina':
    case 'Mexico':
    case 'Spain':
        echo 'Spanish';
        break;
    default:
        echo 'unknown';
};