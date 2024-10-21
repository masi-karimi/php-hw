<?php

// Section 2: Operators
/* Question 5: 
Complex Conditional Operations: Write a PHP script that accepts a number. If the number is 
divisible by 3 and 5, print "FizzBuzz". If divisible by 3, print "Fizz". If divisible by 5, print "Buzz". 
However, if the number is prime, print "Prime" regardless of its divisibility. */


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
 * Function to determine the output based on the number's properties
 * @param int $num - The number to evaluate
 */
function fizz_buzz_prime($num) {
    if (is_prime($num)) {
        echo "Prime <br>";
    } elseif ($num % 3 == 0 && $num % 5 == 0) {
        echo "FizzBuzz <br>";
    } elseif ($num % 3 == 0) {
        echo "Fizz <br>";
    } elseif ($num % 5 == 0) {
        echo "Buzz <br>";
    } else {
        echo $num . "<br>";
    }
}

// Example usage
$number1 = 15; // FizzBuzz
$number2 = 9;  // Fizz
$number3 = 25; // Buzz
$number4 = 7;  // Prime
$number5 = 22; // Neither divisible by 3 or 5 nor prime

echo "Number: $number1 - Result: "; fizz_buzz_prime($number1);
echo "Number: $number2 - Result: "; fizz_buzz_prime($number2);
echo "Number: $number3 - Result: "; fizz_buzz_prime($number3);
echo "Number: $number4 - Result: "; fizz_buzz_prime($number4);
echo "Number: $number5 - Result: "; fizz_buzz_prime($number5);
?>