<?php
// This is a simple function to calculate the sum of two numbers
function sum($a, $b) {
  return $a + $b;
}

// This is a more complex function that takes an array and returns a new array with all even numbers removed
function remove_evens(&$array) {
  $new_array = array();
  foreach ($array as $value) {
    if ($value % 2 != 0) {
      $new_array[] = $value;
    }
  }
  return $new_array;
}

// This is a function that takes two strings and returns the number of characters they have in common
function common_chars($str1, $str2) {
  $common_chars = 0;
  for ($i = 0; $i < strlen($str1); $i++) {
    for ($j = 0; $j < strlen($str2); $j++) {
      if ($str1[$i] == $str2[$j]) {
        $common_chars++;
      }
    }
  }
  return $common_chars;
}
?>