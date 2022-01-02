<?php

class Student
{
    private $firstName;
    private $lastName;
    private $age;
    private $homeTown;

    public function __construct($fName, $lName, $age, $city)
    {
        $this->firstName = $fName;
        $this->lastName = $lName;
        $this->age = $age;
        $this->homeTown = $city;
    }

    public function getHomeTown()
    {
        return $this->homeTown;
    }

    public function __toString()
    {
        return "$this->firstName $this->lastName is $this->age years old.";
    }
}


$command = readline();
$students = [];
while ($command !== 'end') {
    $studentInfo = explode(' ', $command);
    $newStudent = new Student($studentInfo[0], $studentInfo[1], $studentInfo[2], $studentInfo[3]);
    $students[] = $newStudent;
    $command = readline();
}
$searchedCity = readline();

foreach ($students as $student) {
    if ($searchedCity == $student->getHomeTown()) {
        echo $student . PHP_EOL;
    }
}