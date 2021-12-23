<?php
function returnGradeWord($grade)
{
    if ($grade >= 2.00 && $grade < 3) {
        return "Fail";
    } else if ($grade >= 3.00 && $grade < 3.5) {
        return 'Poor';
    } else if ($grade >= 3.50 && $grade < 4.5) {
        return 'Good';
    } else if ($grade >= 4.5 && $grade < 5.5) {
        return 'Very Good';
    } else if ($grade >= 5.5 && $grade <= 6) {
        return 'Excellent';
    }
}

$currGrade = floatval(readline());

echo returnGradeWord($currGrade);