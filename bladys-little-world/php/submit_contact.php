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
    $parentName = $_POST['parentName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $additionalInfo = $_POST['additionalInfo'];

    // Validate inputs
    if (empty($parentName) || empty($email)) {
        echo json_encode(["status" => "error", "message" => "Please fill all required fields correctly."]);
    } else {
        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO contact_submissions (parent_name, email, phone, additional_info) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $parentName, $email, $phone, $additionalInfo);

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Contact request submitted successfully."]);
        } else {
            error_log("Error: " . $stmt->error);
            echo json_encode(["status" => "error", "message" => "Error: " . $stmt->error]);
        }

        $stmt->close();
    }
}

$conn->close();
?>