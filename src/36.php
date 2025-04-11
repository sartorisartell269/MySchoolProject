<?php
// Define your constants here
$database = "your_database";
$username = "your_username";
$password = "your_password";

// Connect to the database using PDO
$dsn = "mysql:host=$database;dbname=$username;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
];
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die("Failed to connect to the database: " . $e->getMessage());
}
?>
