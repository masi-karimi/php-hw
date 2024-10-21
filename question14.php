<?php

// Section 4: Loops & Iterations
/* Question 14: 
Prime Number Finder (Optimized Loop): Write a PHP function that takes a number as input and 
returns an array of all prime numbers between 1 and the given number. Optimize the loop to 
minimize the number of iterations (hint: loop only until the square root of the number). */


/**
 * Function to check if a number is prime
 * @param int $num - The number to check
 * @return bool - True if the number is prime, false otherwise
 */
function is_prime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

/**
 * Function to get all prime numbers between 1 and a given number
 * @param int $max_number - The maximum number up to which to find prime numbers
 * @return array - Array of prime numbers
 */
function get_primes_up_to($max_number) {
    $primes = array();
    for ($i = 2; $i <= $max_number; $i++) {
        if (is_prime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

// Example usage
$user_input = 50; // Replace this with the user input number
$prime_numbers = get_primes_up_to($user_input);

echo "Prime numbers between 1 and $user_input: ";
print_r($prime_numbers);
?>