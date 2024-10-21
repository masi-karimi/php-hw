<?php

// Section 6: Functions
/* Question 25: 
Higher-Order Functions: Write a PHP function that takes another function as an argument and 
applies it to every element in a 2D array of numbers. The higher-order function should return a 
transformed 2D array. */


/**
 * Higher-order function to apply a given function to each element in a 2D array
 * @param array $array2D - The 2D array of numbers
 * @param callable $callback - The function to apply to each element
 * @return array - The transformed 2D array
 */
function transform_2D_array($array2D, callable $callback) {
    $transformed_array2D = array();

    // Loop through each row in the 2D array
    foreach ($array2D as $row) {
        $transformed_row = array();

        // Loop through each element in the row
        foreach ($row as $element) {
            // Apply the callback function to each element
            $transformed_row[] = $callback($element);
        }

        // Add the transformed row to the transformed 2D array
        $transformed_array2D[] = $transformed_row;
    }

    return $transformed_array2D;
}

// Example usage
$array2D = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Define a callback function to square each number
$callback = function($number) {
    return $number * $number;
};

// Apply the callback function to each element in the 2D array
$transformed_array2D = transform_2D_array($array2D, $callback);

echo "Original 2D array: <br>";
print_r($array2D);

echo "<br><br>Transformed 2D array (squared values): <br>";
print_r($transformed_array2D);
?>