<?php
// Connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=my_school_project;charset=utf8', 'root', '');
// SQL query to retrieve data from the database
$stmt = $pdo->query("SELECT * FROM students");
// Fetch all rows from the query result
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $student) {
    // Print the student's name and age
    echo "Name: " . $student['name'] . ", Age: " . $student['age'] . "<br>";
}
?>
