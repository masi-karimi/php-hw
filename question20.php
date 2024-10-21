<?php

// Section 6: Functions
/* Question 20: 
Recursive Function for Palindrome: Write a recursive function to check if a given string is a 
palindrome. The function should only use recursion (no loops) and return true if the string is a 
palindrome, false otherwise. */


/**
 * Recursive function to check if a string is a palindrome
 * @param string $str - The string to check
 * @return bool - True if the string is a palindrome, false otherwise
 */
function is_palindrome($str) {
    // Base case: if the string is empty or has only one character, it's a palindrome
    if (strlen($str) <= 1) {
        return true;
    }

    // Check if the first and last characters are the same
    if ($str[0] === $str[strlen($str) - 1]) {
        // Recursively check the substring excluding the first and last characters
        return is_palindrome(substr($str, 1, strlen($str) - 2));
    }

    // If the first and last characters are not the same, it's not a palindrome
    return false;
}

// Example usage
$input1 = "racecar";
$input2 = "hello";

echo "Is '$input1' a palindrome? " . (is_palindrome($input1) ? "True" : "False") . "<br>";
echo "Is '$input2' a palindrome? " . (is_palindrome($input2) ? "True" : "False") . "<br>";
?>