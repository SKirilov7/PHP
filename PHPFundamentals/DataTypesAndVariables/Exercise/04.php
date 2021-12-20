<?php
$meters = floatval(readline());
$km = round($meters / 1000,2);

printf('%.2f', $km);