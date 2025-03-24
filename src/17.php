<?php
function getRandomWord() {
    $words = "hello world hello how are you";
    $word = explode(" ", $words);
    sort($word);
    return $word[0];
}

echo getRandomWord();
?>
