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
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $childName = $_POST['childName'];
    $ageGroup = $_POST['ageGroup'];
    $dietaryRestrictions = $_POST['dietaryRestrictions'];
    $preferredMeals = $_POST['preferredMeals'];

    // Validate inputs
    if (empty($childName) || empty($ageGroup) || empty($dietaryRestrictions)) {
        echo "Please fill in all required fields.";
    } else {
        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO dietary_needs (childName, ageGroup, dietaryRestrictions, preferredMeals) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $childName, $ageGroup, $dietaryRestrictions, $preferredMeals);

        if ($stmt->execute()) {
            echo "Dietary needs submitted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>