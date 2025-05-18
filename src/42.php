<?php
// Connect to MySQL database
$db = new mysqli('localhost', 'username', 'password', 'database_name');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Perform SQL query
$result = $db->query("SELECT * FROM table_name");

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . ", name: " . $row["name"] . "\n";
    }
} else {
    echo "No results found.";
}

// Close connection
$db->close();
?>
