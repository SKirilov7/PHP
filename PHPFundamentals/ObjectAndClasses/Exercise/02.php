<?php

class Student{
    private $name;
    private $listOfGrades;
    private $averageGrade;

    public function __construct($name, $listOfGrades){
        $this->name = $name;
        $this->listOfGrades = $listOfGrades;
        $this->averageGrade = array_sum($listOfGrades) / count($listOfGrades);
    }

    public function getAverageGrade(){
        return $this->averageGrade;
    }
    public function getName(){
        return $this->name;
    }
}

$numberStudents = intval(readline());
$students = [];
for ($i = 0; $i < $numberStudents; $i++){
    $studentInfo = explode(' ',readline());
    $name = $studentInfo[0];
    $grades = array_splice($studentInfo, 1);
    $newStudent = new Student($name, $grades);
    $students[] = $newStudent;
}

$students = array_filter($students, function ($el){if ($el->getAverageGrade() >= 5){return $el;}});

uksort($students, function ($key1,$key2) use ($students){
    $firstName = $students[$key1]->getName();
    $secondName = $students[$key2]->getName();
    $firstGrade = $students[$key1]->getAverageGrade();
    $secondGrade = $students[$key2]->getAverageGrade();
    if ($firstName == $secondName){
        return $secondGrade <=> $firstGrade;
    }
    return $firstName <=> $secondName;
});

foreach($students as $student){
    printf("%s -> %.2f", $student->getName(), $student->getAverageGrade());
    echo PHP_EOL;
}