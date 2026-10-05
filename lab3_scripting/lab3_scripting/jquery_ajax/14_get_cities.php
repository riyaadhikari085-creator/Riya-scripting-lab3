<?php
// 14_get_cities.php
header('Content-Type: application/json');

$data = [
    "Nepal" => ["Kathmandu", "Pokhara", "Biratnagar", "Chitwan"],
    "India"  => ["Delhi", "Mumbai", "Bangalore", "Chennai"],
    "USA"    => ["New York", "Los Angeles", "Chicago", "Houston"]
];

$country = isset($_GET['country']) ? $_GET['country'] : '';

if (isset($data[$country])) {
    echo json_encode($data[$country]);
} else {
    echo json_encode([]);
}
