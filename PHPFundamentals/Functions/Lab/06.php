<?php
function calculateArea($a, $h)
{
    return $h * $a;
}

$width = intval(readline());
$height = intval(readline());
echo calculateArea($width, $height);
