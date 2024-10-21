<?php

// Section 6: Functions
/* Question 21: 
Anonymous Function with Array Processing: Write an anonymous function that is passed to the 
array_filter() function to filter an array of numbers. The anonymous function should only return 
numbers that are divisible by both 3 and 7. */


// Example array of numbers
$numbers = array(21, 35, 42, 50, 63, 77, 84, 91, 105);

// Use array_filter() with an anonymous function to filter the numbers
$filtered_numbers = array_filter($numbers, function($number) {
    return ($number % 3 === 0 && $number % 7 === 0);
});

// Output the filtered array
echo "Numbers divisible by both 3 and 7: <br>";
print_r($filtered_numbers);
?>