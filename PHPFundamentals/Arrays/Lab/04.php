<?php
$arrayOfStrings = explode(' ',readline());
$arrayOfStrings = array_reverse($arrayOfStrings);
foreach ($arrayOfStrings as $item){
    echo "$item ";
}