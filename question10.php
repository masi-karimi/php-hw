<?php

// Section 3: Conditional Statements
/* Question 10: 
Switch Statement Puzzle: Using a switch statement, create a simple calculator that takes a string 
input (like "5 + 2" or "8 * 3") and calculates the result. Handle errors for unsupported operations 
or invalid input formats. */


/**
 * Function to parse and evaluate a simple arithmetic expression without regex
 * @param string $input - The arithmetic expression (e.g., "5 + 2")
 * @return mixed - The result of the calculation or an error message
 */
function simple_calculator($input) {
    // Trim any whitespace from the input
    $input = trim($input);

    // Find the position of the operator in the string
    $operators = ['+', '-', '*', '/'];
    $operator_pos = -1;
    $operator = '';
    foreach ($operators as $op) {
        $pos = strpos($input, $op);
        if ($pos !== false) {
            $operator_pos = $pos;
            $operator = $op;
            break;
        }
    }

    // Check if a valid operator was found
    if ($operator_pos === -1) {
        return "Error: Invalid input format.";
    }

    // Extract the numbers and operator from the input string
    $num1 = substr($input, 0, $operator_pos);
    $num2 = substr($input, $operator_pos + 1);
    
    // Convert the numbers to integers
    $num1 = (int)trim($num1);
    $num2 = (int)trim($num2);

    // Switch statement to perform the calculation based on the operator
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Error: Division by zero.";
            }
            return $num1 / $num2;
        default:
            return "Error: Unsupported operator.";
    }
}

// Example usage
$input1 = "5 + 2";
$input2 = "8 * 3";
$input3 = "10 / 0";
$input4 = "15 - 4";
$input5 = "invalid input";

echo "Input: $input1 - Result: " . simple_calculator($input1) . "<br>";
echo "Input: $input2 - Result: " . simple_calculator($input2) . "<br>";
echo "Input: $input3 - Result: " . simple_calculator($input3) . "<br>";
echo "Input: $input4 - Result: " . simple_calculator($input4) . "<br>";
echo "Input: $input5 - Result: " . simple_calculator($input5) . "<br>";
?>