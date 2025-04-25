<?php
// Assuming you have an object of your class called $yourClass

$teacher = $yourClass::findTeacherByUsername('example@example.com');
if ($teacher) {
    echo "Found teacher with username: $teacher->username";
} else {
    echo "No teacher found with the specified username.";
}
?>
