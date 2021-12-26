<?php
$numbers = array_map(function ($el) {
    return intval(strrev($el));}, explode(' ', readline()));

echo array_sum($numbers);