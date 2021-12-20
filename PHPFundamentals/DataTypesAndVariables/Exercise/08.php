<?php
$numberSnowballs = intval(readline());
$maxValue = PHP_INT_MIN;
$maxValueString = '';

for ($i = 0; $i < $numberSnowballs; $i++) {
    $snowballSnow = intval(readline());
    $snowballTime = intval(readline());
    $snowballQuality = intval(readline());
    $snowballValue = ($snowballSnow / $snowballTime) ** $snowballQuality;
    if ($snowballValue > $maxValue){
        $maxValue = $snowballValue;
        $maxValueString = "$snowballSnow : $snowballTime = $snowballValue ($snowballQuality)";
    };
};

echo $maxValueString;
