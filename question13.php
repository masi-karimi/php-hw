<?php

// Section 4: Loops & Iterations
/* Question 13: 
Fibonacci Sequence with Loops: Write a PHP function that generates and returns the Fibonacci 
sequence up to a user-specified number using a while loop. */


/**
 * Function to generate the Fibonacci sequence up to a user-specified number
 * @param int $max_number - The maximum number up to which the Fibonacci sequence is generated
 * @return array - Array containing the Fibonacci sequence
 */
function generate_fibonacci($max_number) {
    $fibonacci_sequence = array(0, 1); // Initialize the sequence with the first two numbers

    // Use a while loop to generate the Fibonacci sequence
    while (true) {
        // Calculate the next number in the sequence
        $next_number = end($fibonacci_sequence) + prev($fibonacci_sequence);
        
        // Break the loop if the next number exceeds the max number
        if ($next_number > $max_number) {
            break;
        }
        
        // Append the next number to the sequence
        $fibonacci_sequence[] = $next_number;
        
        // Move the pointer back to the end of the array for the next iteration
        end($fibonacci_sequence);
    }

    return $fibonacci_sequence;
}

// Example usage
$user_specified_number = 100; // Replace this with the user-specified number
$fibonacci_sequence = generate_fibonacci($user_specified_number);

echo "Fibonacci sequence up to $user_specified_number: ";
print_r($fibonacci_sequence);
?>