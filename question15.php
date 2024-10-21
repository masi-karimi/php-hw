<?php

// Section 5: Arrays
/* Question 15: 
Array Sorting: Write a PHP program that takes an associative array of product names and their 
prices, then sorts the array by price (highest to lowest) while maintaining the key-value 
associations. */


/**
 * Function to sort an associative array by value (price) in descending order
 * @param array $products - Associative array of product names and their prices
 * @return array - Sorted associative array by price in descending order
 */
function sort_by_price_desc($products) {
    // Use arsort() to sort the array by value in descending order while maintaining key-value associations
    arsort($products);
    return $products;
}

// Example usage
$products = array(
    "Laptop" => 1200,
    "Headphones" => 100,
    "Mouse" => 25,
    "Keyboard" => 50,
    "Monitor" => 300
);

echo "Original array:<br>";
print_r($products);

$sorted_products = sort_by_price_desc($products);

echo "<br><br>Sorted array by price (highest to lowest):<br>";
print_r($sorted_products);
?>