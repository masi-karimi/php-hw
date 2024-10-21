<?php

// Section 4: Loops & Iterations
/* Question 11: 
Nested Loops and Patterns: Write a PHP script that prints the following pattern using nested loops 
for any user-defined size:
1
1 2
1 2 3
1 2 3 4
The size of the pyramid should be dynamically provided by the user. */


/**
 * Function to print the pyramid pattern
 * @param int $size - The size of the pyramid
 */
function print_pyramid($size) {
    // Outer loop for each row
    for ($i = 1; $i <= $size; $i++) {
        // Inner loop for each column in the row
        for ($j = 1; $j <= $i; $j++) {
            // Print the current column number
            echo $j . " ";
        }
        // Move to the next line after completing a row
        echo "<br>";
    }
}

// Example usage
// You can replace 5 with any desired pyramid size
$user_defined_size = 5;
print_pyramid($user_defined_size);
?>