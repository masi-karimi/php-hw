<?php

// Section 4: Loops & Iterations
/* Question 12: 
Dynamic Loop Generation: Write a program that accepts an integer from the user, then generates 
an array of random integers between 1 and 100. Calculate the sum of the integers using a for loop, 
but skip every second number in the array using the continue statement. */


/**
 * Function to generate an array of random integers
 * @param int $size - Number of random integers to generate
 * @return array - Array of random integers
 */
function generate_random_array($size) {
    $random_array = array();
    for ($i = 0; $i < $size; $i++) {
        // Generate a random integer between 1 and 100 and add it to the array
        $random_array[] = rand(1, 100);
    }
    return $random_array;
}

/**
 * Function to calculate the sum of integers in the array, skipping every second number
 * @param array $array - Array of integers
 * @return int - Sum of integers, skipping every second number
 */
function calculate_sum($array) {
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($i % 2 == 1) {
            // Skip every second number
            continue;
        }
        // Add the current number to the sum
        $sum += $array[$i];
    }
    return $sum;
}

// Example usage
$user_input = 10; // Replace this with user input
$random_array = generate_random_array($user_input);

echo "Random Array: ";
print_r($random_array);

echo "<br>";

$sum = calculate_sum($random_array);
echo "Sum of integers (skipping every second number): " . $sum . "<br>";
?>