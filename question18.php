<?php

// Section 5: Arrays
/* Question 18: 
Array Mapping and Filter Challenge: Write a program that takes an array of words and filters out 
all words that contain vowels. Then, apply a function to the resulting array to reverse each word, 
and print the modified array. */


/**
 * Function to filter out words containing vowels
 * @param array $words - Array of words
 * @return array - Array of words without vowels
 */
function filter_words_without_vowels($words) {
    $filtered_words = array();
    foreach ($words as $word) {
        if (!preg_match('/[aeiouAEIOU]/', $word)) {
            $filtered_words[] = $word;
        }
    }
    return $filtered_words;
}

/**
 * Function to reverse each word in an array
 * @param array $words - Array of words
 * @return array - Array of reversed words
 */
function reverse_words($words) {
    $reversed_words = array();
    foreach ($words as $word) {
        $reversed_words[] = strrev($word);
    }
    return $reversed_words;
}

// Example usage
$words = array("apple", "sky", "bird", "hello", "rhythm");

$filtered_words = filter_words_without_vowels($words);
$reversed_words = reverse_words($filtered_words);

echo "Filtered words without vowels: <br>";
print_r($filtered_words);

echo "<br>Reversed words: <br>";
print_r($reversed_words);
?>