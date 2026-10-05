<?php
// 13_check_username.php
// Replace this with a real database lookup, e.g.:
// $conn = new mysqli("localhost", "root", "", "your_db");
// $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
// $stmt->bind_param("s", $username);
// $stmt->execute();
// $exists = $stmt->get_result()->num_rows > 0;

$takenUsernames = ["admin", "hari", "sita", "testuser"]; // sample "database"

$username = isset($_GET['username']) ? trim($_GET['username']) : '';

if (in_array(strtolower($username), $takenUsernames)) {
    echo "Username is <b>not available</b>.";
} else {
    echo "Username is <b>available</b>.";
}
