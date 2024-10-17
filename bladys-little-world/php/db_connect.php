<?php
// Database connection details
$db_host = '34.48.79.89';   // Cloud SQL public IP
$db_user = 'cameronroy';          // Database user
$db_pass = ',@zjnHqAV+}9gpj4';    // Database password
$db_name = 'blady_world_db';       // Database name
$db_port = 3306;

// Create connection
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);

// Check connection and handle errors
if ($mysqli->connect_error) {
    // Use error_log to log errors, and return a generic error to the user
    error_log("Connection failed: " . $mysqli->connect_error);
    die(json_encode([
        "status" => "error",
        "message" => "Database connection failed. Please try again later."
    ]));
}

// Optionally set content type for API responses (JSON)
header('Content-Type: application/json');

// Your other database code or functions can follow here

// Example of a successful connection response
// This part is optional and should be removed in production
echo json_encode([
    "status" => "success",
    "message" => "Successfully connected to the database."
]);

// Close the database connection when done
$mysqli->close();

?>