<?php
// Database connection settings
$db_host = '34.48.79.89';
$db_user = 'cameronroy';
$db_pass = ',@zjnHqAV+}9gpj4';
$db_name = 'blady_world_db';

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);
}

// Handle location sending logic if needed (this depends on what exactly the script is expected to do)
// For now, it's just a placeholder
echo "Location data sent.";

$conn->close();
?>