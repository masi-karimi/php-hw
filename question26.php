<?php

// Section 6: Functions
/* Question 26: 
Memoization with Recursive Functions: Write a recursive PHP function that computes the nth 
Fibonacci number. Use memoization to store intermediate results and improve performance for 
large n. */


/**
 * Recursive function to compute the nth Fibonacci number with memoization
 * @param int $n - The position in the Fibonacci sequence
 * @param array &$memo - Array to store intermediate results (memoization)
 * @return int - The nth Fibonacci number
 */
function fibonacci($n, &$memo = array()) {
    // Base cases
    if ($n <= 1) {
        return $n;
    }

    // Check if the result is already in the memo array
    if (isset($memo[$n])) {
        return $memo[$n];
    }

    // Compute the nth Fibonacci number using recursion and memoization
    $memo[$n] = fibonacci($n - 1, $memo) + fibonacci($n - 2, $memo);
    return $memo[$n];
}

// Example usage
$n = 10; // Replace this with the desired Fibonacci position
$fibonacci_number = fibonacci($n);

echo "The $n-th Fibonacci number is: " . $fibonacci_number;
?>