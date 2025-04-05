<?php
// Initialize the database connection
$host = 'localhost';
$dbname = 'myschoolproject'; // Replace with your database name

// Connect to the database
$conn = mysqli_connect($host, $dbname, 'password', $dbname);

// Check if the connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>
