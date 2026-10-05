<?php
// Q6: User, AdminUser, Customer classes

class User {
    protected $name;
    protected $surname;
    protected $username;
    protected $is_admin = false;

    public function __construct($name, $surname, $username) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    public function isAdmin() {
        return $this->is_admin;
    }

    public function printFullName() {
        echo "$this->name $this->surname";
        if ($this->is_admin) {
            echo " (admin)";
        }
        echo "\n";
    }
}

class Customer extends User {
    private $city;
    private $state;
    private $country;

    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
    }

    public function setCity($city) { $this->city = $city; }
    public function getCity() { return $this->city; }

    public function setState($state) { $this->state = $state; }
    public function getState() { return $this->state; }

    public function setCountry($country) { $this->country = $country; }
    public function getCountry() { return $this->country; }

    public function location() {
        return "$this->city, $this->state, $this->country";
    }
}

class AdminUser extends User {
    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;
    }
}

// ----- Demo -----
$customer = new Customer("Anita", "Gurung", "anita_g");
$customer->setCity("Pokhara");
$customer->setState("Gandaki");
$customer->setCountry("Nepal");

$admin = new AdminUser("Suresh", "Thapa", "suresh_t");

$customer->printFullName();
echo "is_admin: " . var_export($customer->isAdmin(), true) . "\n";
echo "Location: " . $customer->location() . "\n\n";

$admin->printFullName();
echo "is_admin: " . var_export($admin->isAdmin(), true) . "\n";
