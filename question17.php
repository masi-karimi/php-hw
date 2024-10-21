<?php

// Section 5: Arrays
/* Question 17: 
Array Search with Conditions: Create a function that accepts an array of numbers and a threshold. 
The function should search the array and return all numbers greater than the threshold. Use array 
functions and loops in combination. */


/**
 * Function to find all numbers greater than a given threshold
 * @param array $numbers - Array of numbers to search
 * @param float $threshold - The threshold value
 * @return array - Array of numbers greater than the threshold
 */
function find_numbers_above_threshold($numbers, $threshold) {
    $result = array(); // Initialize an empty array to hold the result

    // Loop through each number in the input array
    foreach ($numbers as $number) {
        // Check if the number is greater than the threshold
        if ($number > $threshold) {
            // Add the number to the result array
            $result[] = $number;
        }
    }

    return $result;
}

// Example usage
$numbers = array(10, 25, 30, 5, 40, 15);
$threshold = 20;

echo "Numbers greater than $threshold: <br>";
print_r(find_numbers_above_threshold($numbers, $threshold));
?>