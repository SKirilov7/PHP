<?php

class Person
{
    private $name;
    private $id;
    private $age;

    public function __construct($name, $id, $age)
    {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function __toString(): string
    {
        return "$this->name with ID: $this->id is $this->age years old.";
    }
}

$data = readline();
$people = [];
while ($data !== 'End') {
    $data = explode(' ', $data);
    $newPerson = new Person($data[0], $data[1], intval($data[2]));
    $people[] = $newPerson;
    $data = readline();
}

uksort($people, function ($key1, $key2) use ($people) {
    $firstAge = $people[$key1]->getAge();
    $secondAge = $people[$key2]->getAge();
    return $firstAge <=> $secondAge;
});

foreach ($people as $person) {
    echo $person . PHP_EOL;
}