<?php

// Section 6: Functions
/* Question 24: 
Dynamic Function Creation: Write a function that accepts the name of a mathematical operation 
(like add, subtract, multiply, or divide) and dynamically creates a function that performs the 
corresponding operation on two numbers. Invoke this dynamic function. */


/**
 * Function to create a dynamic mathematical operation function
 * @param string $operation - The name of the operation ('add', 'subtract', 'multiply', 'divide')
 * @return callable - The dynamically created function
 */
function create_math_function($operation) {
    switch ($operation) {
        case 'add':
            return function($a, $b) {
                return $a + $b;
            };
        case 'subtract':
            return function($a, $b) {
                return $a - $b;
            };
        case 'multiply':
            return function($a, $b) {
                return $a * $b;
            };
        case 'divide':
            return function($a, $b) {
                if ($b == 0) {
                    return "Error: Division by zero.";
                }
                return $a / $b;
            };
        default:
            return function() {
                return "Error: Unsupported operation.";
            };
    }
}

// Example usage
$operation_name = 'multiply'; // Replace with the desired operation ('add', 'subtract', 'multiply', 'divide')
$math_function = create_math_function($operation_name);

// Invoke the dynamic function
$result = $math_function(10, 5); // Replace with the desired numbers

echo "Result of $operation_name operation: " . $result;
?>