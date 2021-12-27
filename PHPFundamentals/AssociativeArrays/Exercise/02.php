<?php
$n = intval(readline());
$studentsGrades = [];
for ($i = 0; $i < $n; $i++) {
    $name = readline();
    $grade = floatval(readline());
    if (!key_exists($name, $studentsGrades)) {
        $studentsGrades[$name] = [];
    }
    $studentsGrades[$name][] = $grade;
}

$studentsGrades = array_map(function ($arr) {
    return array_sum($arr) / count($arr);
}, $studentsGrades);

$studentsGrades = array_filter($studentsGrades, function ($grade) {
    return $grade >= 4.50;
});

arsort($studentsGrades);

foreach ($studentsGrades as $student => $grade) {
    printf('%s -> %.2f', $student, $grade);
    echo PHP_EOL;
}