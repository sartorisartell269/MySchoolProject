<?php
// Project settings
$project_name = "MySchoolProject";
$repository_url = "https://github.com/your-repo-name/my-school-project";

// Function to initialize and connect to a database
function initDatabase($table) {
    // SQL query for creating the table
    $sql = "CREATE TABLE $table (id INT PRIMARY KEY, name VARCHAR(255), age INT)";
    
    // Execute the SQL command
    require_once 'vendor/autoload.php';
    $db = new mysqli("localhost", "your_db_user", "your_db_password", $table);
    if ($db->connect_error) {
        die('Connection failed: ' . $db->connect_error);
    }
    
    return $db;
}

// Function to add data to the database
function addDataToDB($table, $data) {
    // SQL query for inserting data into the table
    $sql = "INSERT INTO $table (name, age) VALUES (?, ?)";
    require_once 'vendor/autoload.php';
    $db = initDatabase($table);
    
    if ($db->query($sql, $data)) {
        echo "Data added successfully";
    } else {
        echo "Error: " . $db->error;
    }
}

// Function to query data from the database
function fetchDataFromDB($table) {
    // SQL query for retrieving all records from the table
    $sql = "SELECT * FROM $table";
    
    require_once 'vendor/autoload.php';
    $db = initDatabase($table);
    
    if ($db->query($sql)) {
        echo "<pre>";
        while ($row = $db->fetch_assoc()) {
            echo "$row[name] - Age: $row[age]\n";
        }
        echo "</pre>";
    } else {
        echo "Error: " . $db->error;
    }
}

// Example usage
$table_name = "students";
$data = [
    ["name" => "John", "age" => 16],
    ["name" => "Jane", "age" => 15]
];
addDataToDB($table_name, $data);
fetchDataFromDB($table_name);
?>
