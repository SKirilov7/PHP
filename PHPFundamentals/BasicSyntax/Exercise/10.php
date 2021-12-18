<?php
$lostGamesCount = intval(readline());
$headsetPrice = floatval(readline());
$mousePrice = floatval(readline());
$keyboardPrice = floatval(readline());
$displayPrice = floatval(readline());


$TrashedHeadsetsPrice = floor($lostGamesCount / 2) * $headsetPrice;
$TrashedMousePrice = floor($lostGamesCount / 3) * $mousePrice;
$TrashedKeyboardPrice = floor($lostGamesCount / 6) * $keyboardPrice;
$TrashedDisplayPrice = floor($lostGamesCount / 12) * $displayPrice;

$rageExpenses = $TrashedHeadsetsPrice + $TrashedMousePrice + $TrashedKeyboardPrice + $TrashedDisplayPrice;
printf("Rage expenses: %.2f lv.",$rageExpenses);
