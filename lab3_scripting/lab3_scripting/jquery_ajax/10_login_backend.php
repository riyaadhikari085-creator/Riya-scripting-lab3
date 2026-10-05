<?php
// 10_login_backend.php
// Simple hardcoded check - replace with database lookup in a real app

$validUser = "admin";
$validPass = "Admin@123";

$userid = isset($_POST['userid']) ? $_POST['userid'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ($userid === $validUser && $password === $validPass) {
    echo "success";
} else {
    echo "fail";
}
