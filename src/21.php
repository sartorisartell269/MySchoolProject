<?php
// Define your database connection parameters here
$servername = "localhost";
$username = "root"; // Use the root user to connect to the MySQL server.
$password = ""; // The password of the root user.
$dbname = "my_school_project";

// Create a new PDO object with the specified parameters.
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
