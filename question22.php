<?php

// Section 6: Functions
/* Question 22: 
Closure and Callback Functions: Write a function that accepts an array of numbers and a callback 
function as parameters. The function should apply the callback to each element of the array and 
return the transformed array. Use a closure to define the callback. */


/**
 * Function to apply a callback to each element of an array
 * @param array $numbers - Array of numbers
 * @param callable $callback - Callback function to apply to each element
 * @return array - Transformed array
 */
function transform_array($numbers, callable $callback) {
    $transformed_array = array();
    
    foreach ($numbers as $number) {
        // Apply the callback to each number and add the result to the transformed array
        $transformed_array[] = $callback($number);
    }
    
    return $transformed_array;
}

// Example usage
$numbers = array(1, 2, 3, 4, 5);

// Define a closure as the callback function
$callback = function($number) {
    // Example transformation: square each number
    return $number * $number;
};

$transformed_numbers = transform_array($numbers, $callback);

echo "Original array: <br>";
print_r($numbers);

echo "<br>Transformed array (squared values): <br>";
print_r($transformed_numbers);
?>