<?php
$dsn = 'mysql:dbname=blady_world_db;host=/cloudsql/quick-glow-438420-v7:us-east4:bladys-world-sql';
$user = 'cameronroy';
$password = ',@zjnHqAV+}9gpj4';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo "Connected successfully to the database!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>