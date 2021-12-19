<?php
$centuriesNumber = intval(readline());
$yearsCount = $centuriesNumber * 100;
$daysCount = round($yearsCount * 365.2422);
$hoursCount = $daysCount * 24;
$minutesCount = $hoursCount * 60;

echo "$centuriesNumber centuries = $yearsCount years = $daysCount days = $hoursCount hours = $minutesCount minutes";
