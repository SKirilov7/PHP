<?php

class Person
{
    private $firstName;
    private $lastName;
    private $age;

    public function __construct($fName, $lName, $age)
    {
        $this->firstName = $fName;
        $this->lastName = $lName;
        $this->age = $age;
    }

    public function __toString()
    {
        return "firstName: $this->firstName" . PHP_EOL . "lastName: $this->lastName" . PHP_EOL . "age: $this->age";
    }
}


$firstName = readline();
$lastName = readline();
$age = readline();

$newPerson = new Person($firstName, $lastName, $age);
echo $newPerson;