
<?php
// Create a new database connection object
$db = new mysqli('localhost', 'username', 'password', 'database_name');

// Check if there are any errors in connecting to the database
if ($db->connect_error) {
    die("There was an error while connecting to the database: " . $db->connect_error);
}

// Get the data from the form submission
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Check if all fields are filled in
if (empty($name) || empty($email) || empty($message)) {
    die("Please fill in all the required fields");
}

// Insert the data into the database
$sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    die("Error: " . $sql . "<br>" . $db->error);
}

// Close the database connection
$db->close();
?>