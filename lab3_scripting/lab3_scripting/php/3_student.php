<?php
// Q3: Student class - public, private, protected properties/methods

class Student {
    public $name;
    public $surname;
    public $country;
    private $tuition;
    protected $indexNumber;

    public function getName() { return $this->name; }
    public function getSurname() { return $this->surname; }

    public function helloWorld() {
        return "Hello World";
    }

    protected function helloFamily() {
        return "Hello Family";
    }

    private function helloMe() {
        return "Hello me!";
    }

    private function getTuition() {
        echo "Tuition: $this->tuition\n";
    }
}

class PartTimeStudent extends Student {
    public function helloParent() {
        // Calls protected method from parent class
        return $this->helloFamily();
    }
}

// ----- Demo -----
$student = new Student();
$student->name = "Ram";
$student->surname = "Sharma";
$student->country = "Nepal";

echo $student->getName() . " " . $student->getSurname() . "\n";
echo $student->helloWorld() . "\n";
// $student->helloFamily();  // Error: protected, not accessible outside class/subclass
// $student->helloMe();      // Error: private, not accessible outside class

$partTime = new PartTimeStudent();
$partTime->name = "Sita";
$partTime->surname = "Rai";
echo $partTime->getName() . " " . $partTime->getSurname() . "\n";
echo $partTime->helloWorld() . "\n";
echo $partTime->helloParent() . "\n"; // calls helloFamily() via subclass
