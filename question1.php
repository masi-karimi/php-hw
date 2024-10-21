<?php

// Section 1: Variables, Constants & Data Types
/* Question 1: 
Dynamic Type Conversion: Write a program that accepts two inputs from a user. If both are 
numeric, multiply them; if one is a string, concatenate the values; if both are strings, sort them 
alphabetically. Handle type conversion dynamically. */


/**
 * Function to process user inputs and perform operations based on their types
 * @param mixed $input1 - First user input
 * @param mixed $input2 - Second user input
 * @return mixed - The result of the operation
 */
function process_inputs($input1, $input2) {
    // Check if both inputs are numeric
    if (is_numeric($input1) && is_numeric($input2)) {
        return $input1 * $input2; // Multiply the inputs
    }
    // Check if one of the inputs is numeric
    elseif (is_numeric($input1) || is_numeric($input2)) {
        return $input1 . $input2; // Concatenate the inputs
    }
    // If both inputs are strings
    else {
        // Convert inputs to strings (if they are not already)
        $input1 = strval($input1);
        $input2 = strval($input2);
        
        // Store inputs in an array
        $strings_array = array($input1, $input2);
        
        // Sort the array alphabetically
        sort($strings_array);
        
        // Return the sorted array as a concatenated string
        return $strings_array[0] . " " . $strings_array[1];
    }
}

// Example usage

// Case 1: Both inputs are numeric
$input1 = 10;
$input2 = 20;
$result = process_inputs($input1, $input2);
echo "Case 1 (both numeric): $result<br>";

// Case 2: One input is numeric, the other is a string
$input1 = "Hello";
$input2 = 123;
$result = process_inputs($input1, $input2);
echo "Case 2 (one numeric, one string): $result<br>";

// Case 3: Both inputs are strings
$input1 = "banana";
$input2 = "apple";
$result = process_inputs($input1, $input2);
echo "Case 3 (both strings): $result<br>";
?>