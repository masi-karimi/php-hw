<?php

// Section 1: Variables, Constants & Data Types
/* Question 2: 
Constant Functionality: Create a constant EXCHANGE_RATE for converting between USD and EUR. 
Write a function that dynamically converts an array of amounts from USD to EUR and vice versa, 
based on user input. */


// Define a constant for the exchange rate between USD and EUR
define("EXCHANGE_RATE", 0.85); // Example rate: 1 USD = 0.85 EUR

/**
 * Function to convert an array of amounts between USD and EUR based on user input
 * @param array $amounts - Array of amounts to be converted
 * @param string $direction - Conversion direction ('USD_to_EUR' or 'EUR_to_USD')
 * @return array - Array of converted amounts
 */
function convert_currency($amounts, $direction) {
    // Initialize an array to hold the converted amounts
    $converted_amounts = array();
    
    // Loop through each amount in the input array
    foreach ($amounts as $amount) {
        // Check the direction of conversion
        if ($direction === 'USD_to_EUR') {
            // Convert from USD to EUR
            $converted_amounts[] = $amount * EXCHANGE_RATE;
        } elseif ($direction === 'EUR_to_USD') {
            // Convert from EUR to USD
            $converted_amounts[] = $amount / EXCHANGE_RATE;
        } else {
            // Handle invalid direction input
            echo "Invalid conversion direction. Please use 'USD_to_EUR' or 'EUR_to_USD'.<br>";
            return array();
        }
    }
    
    // Return the array of converted amounts
    return $converted_amounts;
}

// Example usage
$amounts_usd = array(100, 200, 300); // Amounts in USD
$amounts_eur = array(85, 170, 255); // Amounts in EUR

// Convert from USD to EUR
$converted_to_eur = convert_currency($amounts_usd, 'USD_to_EUR');
echo "Converted amounts from USD to EUR: <br>";
foreach ($converted_to_eur as $amount) {
    echo $amount . " EUR<br>";
}

// Convert from EUR to USD
$converted_to_usd = convert_currency($amounts_eur, 'EUR_to_USD');
echo "Converted amounts from EUR to USD: <br>";
foreach ($converted_to_usd as $amount) {
    echo $amount . " USD<br>";
}
?>