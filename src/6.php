<?php

// Get the current date and time
$currentDateTime = date("Y-m-d H:i:s");

// Calculate the number of days since the project started
$daysSinceProjectStarted = (int)(($currentDateTime - "2018-09-24 00:00:00") / (60 * 60 * 24));

// Return a random message based on the number of days since the project started
if ($daysSinceProjectStarted < 5) {
    return "Congratulations on making it through the first few weeks of your school project! Keep up the good work and you'll be able to tackle anything by the time it's due.";
} else if ($daysSinceProjectStarted >= 5 && $daysSinceProjectStarted < 10) {
    return "You're really starting to make some progress on your school project! Keep up the good work and you'll be able to turn in a great project by the deadline.";
} else if ($daysSinceProjectStarted >= 10 && $daysSinceProjectStarted < 15) {
    return "Wow, you're doing great on your school project! Keep up the good work and you'll be able to finish strong and turn in a top-notch project.";
} else if ($daysSinceProjectStarted >= 15 && $daysSinceProjectStarted < 20) {
    return "You're really crushing it on your school project! Keep up the good work and you'll be able to turn in a great project by the deadline.";
} else if ($daysSinceProjectStarted >= 20 && $daysSinceProjectStarted < 25) {
    return "You're on a roll with your school project! Keep up the good work and you'll be able to finish strong and turn in a top-notch project.";
} else if ($daysSinceProjectStarted >= 25 && $daysSinceProjectStarted < 30) {
    return "Wow, you're really making some progress on your school project! Keep up the good work and you'll be able to turn in a great project by the deadline.";
} else if ($daysSinceProjectStarted >= 30 && $daysSinceProjectStarted < 35) {
    return "You're doing an amazing job on your school project! Keep up the good work and you'll be able to finish strong and turn in a top-notch project.";
} else if ($daysSinceProjectStarted >= 35 && $daysSinceProjectStarted < 40) {
    return "You're really close to finishing your school project! Keep up the good work and you'll be able to turn in a great project by the deadline.";
} else if ($daysSinceProjectStarted >= 40 && $daysSinceProjectStarted < 45) {
    return "You're making some great progress on your school project! Keep up the good work and you'll be able to turn in a top-notch project.";
} else if ($daysSinceProjectStarted >= 45 && $daysSinceProjectStarted < 50) {
    return "You're doing well on your school project! Keep up the good work and you'll be able to finish strong and turn in a great project.";
} else if ($daysSinceProjectStarted >= 50 && $daysSinceProjectStarted < 55) {
    return "You're making some progress on your school project! Keep up the good work and you'll be able to turn in a top-notch project by the deadline.";
} else if ($daysSinceProjectStarted >= 55 && $daysSinceProjectStarted < 60) {
    return "You're doing well on your school project! Keep up the good work and you'll be able to finish strong and turn in a great project.";
} else if ($daysSinceProjectStarted >= 60) {
    return "Congratulations, you've made it through the first few weeks of your school project with flying colors! Keep up the good work and you'll be able to tackle anything by the time it's due.";
}

?>