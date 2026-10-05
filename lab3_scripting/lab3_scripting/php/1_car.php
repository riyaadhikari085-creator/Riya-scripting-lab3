<?php
// Q1: Car class - Encapsulation, Inheritance, Interface

interface Vehicle {
    public function startEngine();
    public function stopEngine();
}

class Car implements Vehicle {
    // Encapsulated (private) properties
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Getters
    public function getMake() { return $this->make; }
    public function getModel() { return $this->model; }
    public function getYear() { return $this->year; }

    // Setters
    public function setMake($make) { $this->make = $make; }
    public function setModel($model) { $this->model = $model; }
    public function setYear($year) { $this->year = $year; }

    public function start() {
        echo "Car started.\n";
    }

    public function displayInfo() {
        echo "Make: $this->make, Model: $this->model, Year: $this->year\n";
    }

    public function getDescription() {
        return "This is a $this->year $this->make $this->model.";
    }

    // Interface implementation
    public function startEngine() {
        echo "Engine started.\n";
    }

    public function stopEngine() {
        echo "Engine stopped.\n";
    }
}

class ElectricCar extends Car {
    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function charge() {
        echo "Charging the battery of {$this->getMake()} {$this->getModel()}...\n";
    }

    // Override getDescription()
    public function getDescription() {
        return parent::getDescription() . " It has a {$this->batteryCapacity} kWh battery.";
    }
}

// ----- Demo -----
$car = new Car("Toyota", "Corolla", 2020);
$car->start();
$car->displayInfo();
$car->startEngine();
$car->stopEngine();
echo $car->getDescription() . "\n\n";

$eCar = new ElectricCar("Tesla", "Model 3", 2023, 75);
$eCar->start();
$eCar->displayInfo();
$eCar->charge();
echo $eCar->getDescription() . "\n";
