<?php

// Section 2: Operators
/* Question 6: 
Bitwise Operators and Puzzles: Write a PHP program that uses bitwise operators to determine if 
two integers are equal or not without using comparison operators (== or ===). */


/**
 * Function to determine if two integers are equal using bitwise operators
 * @param int $a - First integer
 * @param int $b - Second integer
 * @return bool - True if the integers are equal, false otherwise
 */
function are_integers_equal($a, $b) {
    // Use XOR (^) to compare the two integers
    // XOR will result in 0 if both integers are identical
    return ($a ^ $b) === 0;
}

// Example usage
$int1 = 42;
$int2 = 42;
$int3 = 50;

echo "Checking if $int1 and $int2 are equal: ";
echo are_integers_equal($int1, $int2) ? "Equal" : "Not Equal";
echo "<br>";

echo "Checking if $int1 and $int3 are equal: ";
echo are_integers_equal($int1, $int3) ? "Equal" : "Not Equal";
echo "<br>";
?>