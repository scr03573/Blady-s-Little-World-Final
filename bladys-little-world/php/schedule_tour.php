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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tourParentName = $_POST['tourParentName'];
    $tourEmail = $_POST['tourEmail'];
    $preferredTourDate = $_POST['preferredTourDate'];
    $preferredTourTime = $_POST['preferredTourTime'];

    // Validate inputs
    if (empty($tourParentName) || empty($tourEmail) || empty($preferredTourDate) || empty($preferredTourTime)) {
        echo json_encode(["status" => "error", "message" => "Please fill all required fields correctly."]);
    } else {
        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO tour_requests (tourParentName, tourEmail, preferredTourDate, preferredTourTime) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $tourParentName, $tourEmail, $preferredTourDate, $preferredTourTime);

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Tour scheduled successfully."]);
        } else {
            error_log("Error: " . $stmt->error);
            echo json_encode(["status" => "error", "message" => "Error: " . $stmt->error]);
        }

        $stmt->close();
    }
}

$conn->close();
?>