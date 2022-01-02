<?php

class Catalogue
{
    private $cars;
    private $trucks;

    public function __construct()
    {
        $this->cars = [];
        $this->trucks = [];
    }

    public function addCar($car)
    {
        $this->cars[] = $car;
    }

    public function addTruck($truck)
    {
        $this->trucks[] = $truck;
    }

    public function getCars(){
        return $this->cars;
    }
    public function getTrucks(){

        return $this->trucks;
    }
}

class Car
{
    private $brand;
    private $model;
    private $horsePower;

    public function __construct($brand, $model, $horsePower)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->horsePower = $horsePower;
    }

    public function __toString()
    {
        return "$this->brand: $this->model - $this->horsePower" . "hp";
    }
}

class Truck
{
    private $brand;
    private $model;
    private $weight;

    public function __construct($brand, $model, $weight)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->weight = $weight;
    }

    public function __toString()
    {
        return "$this->brand: $this->model - $this->weight" . "kg";
    }
}

$command = readline();
$catalogue = new Catalogue();
while ($command !== 'end') {
    $data = explode('/', $command);
    $typeVehicle = $data[0];
    if ($typeVehicle == 'Car') {
        $newCar = new Car($data[1], $data[2], $data[3]);
        $catalogue->addCar($newCar);
    } else {
        $newTruck = new Truck($data[1], $data[2], $data[3]);
        $catalogue->addTruck($newTruck);
    }
    $command = readline();
}

$cars = $catalogue->getCars();
$trucks = $catalogue->getTrucks();
sort($cars);
sort($trucks);


if ($cars) {
    echo "Cars:" . PHP_EOL;
    foreach ($cars as $car) {
        echo $car . PHP_EOL;
    }
}
if ($trucks) {
    echo "Trucks:" . PHP_EOL;
    foreach ($trucks as $truck) {
        echo $truck . PHP_EOL;
    }
}