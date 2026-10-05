<?php
// Q2: Bicycle class

class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $description = "Used bicycle";
    public $weight; // stored in grams

    public function getInfo() {
        return "$this->brand $this->model ($this->year)";
    }

    // $inKg = false by default -> returns grams, true -> returns kilograms
    public function getWeight($inKg = false) {
        if ($inKg) {
            return $this->weight / 1000 . " kg";
        }
        return $this->weight . " g";
    }

    public function setWeight($grams) {
        $this->weight = $grams;
    }
}

// ----- Demo -----
$bike1 = new Bicycle();
$bike1->brand = "Trek";
$bike1->model = "Marlin 7";
$bike1->year = 2022;
$bike1->setWeight(13500);

$bike2 = new Bicycle();
$bike2->brand = "Giant";
$bike2->model = "Talon 3";
$bike2->year = 2021;
$bike2->description = "Brand new";
$bike2->setWeight(12800);

foreach ([$bike1, $bike2] as $bike) {
    echo $bike->getInfo() . " - " . $bike->description . "\n";
    echo "Weight: " . $bike->getWeight(true) . "\n";
    echo "Weight: " . $bike->getWeight(false) . "\n\n";
}
