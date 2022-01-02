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

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }


    public function setAge($age)
    {
        $this->age = $age;
    }

    public function __toString()
    {
        return "$this->firstName $this->lastName is $this->age years old.";
    }
}


$command = readline();
$students = [];
while ($command !== 'end') {
    $isNewStudent = false;
    $studentInfo = explode(' ', $command);
    foreach ($students as $student) {
        if ($student->getFirstName() == $studentInfo[0] && $student->getLastName() == $studentInfo[1]) {
            $indexStudent = array_search($student, $students);
            $students[$indexStudent]->setAge($studentInfo[2]);
            $isNewStudent = true;
        }
    }
    if (!$isNewStudent) {
        $newStudent = new Student($studentInfo[0], $studentInfo[1], $studentInfo[2], $studentInfo[3]);
        $students[] = $newStudent;
    }
    $command = readline();
}
$searchedCity = readline();

foreach ($students as $student) {
    if ($searchedCity == $student->getHomeTown()) {
        echo $student . PHP_EOL;
    }
}