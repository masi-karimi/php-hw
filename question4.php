<?php

// Section 1: Variables, Constants & Data Types
/* Question 4: 
Data Types and Error Handling: Write a program that dynamically detects and outputs the data 
types of different variables passed to it. If an invalid type (like resource) is encountered, throw an 
exception. */


/**
 * Function to detect and output the data type of a variable.
 * Throws an exception if the type is resource.
 * @param mixed $variable - The variable to check.
 * @return string - The data type of the variable.
 * @throws Exception - Throws exception if the type is resource.
 */
function detect_data_type($variable) {
    // Get the type of the variable
    $type = gettype($variable);
    
    // Check if the type is resource
    if ($type === 'resource') {
        // Throw an exception if the variable is of type resource
        throw new Exception('Invalid type: resource encountered.');
    }
    
    // Return the type of the variable
    return $type;
}

// Example usage
try {
    // Define different variables
    $var1 = 123;              // Integer
    $var2 = "Hello, world!";  // String
    $var3 = 3.14;             // Double
    $var4 = true;             // Boolean
    $var5 = array(1, 2, 3);   // Array
    $var6 = fopen(__FILE__, 'r');  // Resource

    // Detect and output the data types
    echo "Variable 1 is of type: " . detect_data_type($var1) . "<br>";
    echo "Variable 2 is of type: " . detect_data_type($var2) . "<br>";
    echo "Variable 3 is of type: " . detect_data_type($var3) . "<br>";
    echo "Variable 4 is of type: " . detect_data_type($var4) . "<br>";
    echo "Variable 5 is of type: " . detect_data_type($var5) . "<br>";
    
    // This will throw an exception
    echo "Variable 6 is of type: " . detect_data_type($var6) . "<br>";

    // Close the resource
    fclose($var6);
} catch (Exception $e) {
    // Catch and display the exception message
    echo "Exception: " . $e->getMessage() . "<br>";
}
?>