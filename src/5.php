<?php
// Get the current date and time
$currentDateTime = new DateTime();

// Output the current date and time in a user-friendly format
echo $currentDateTime->format('l, F jS Y g:i A');
?>