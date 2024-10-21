<?php

// Section 2: Operators
/* Question 7: 
Logical Operators in Complex Conditions: Create a function that accepts a series of boolean 
conditions and performs multiple logical operations (AND, OR, NOT) on them to evaluate a 
complex decision tree, returning the final result. */


/**
 * Function to evaluate a complex decision tree of boolean conditions using logical operators.
 * @param array $conditions - Array of boolean conditions.
 * @param string $operations - String representing the logical operations (AND, OR, NOT).
 * @return bool - Result of evaluating the decision tree.
 */
function evaluate_decision_tree($conditions, $operations) {
    // Check if the number of conditions and operations match
    if (strlen($operations) != count($conditions) - 1) {
        throw new Exception("Mismatch between number of conditions and operations.");
    }

    // Initialize the result with the first condition
    $result = $conditions[0];

    // Loop through operations and evaluate the conditions
    for ($i = 0; $i < strlen($operations); $i++) {
        $operation = $operations[$i];
        $condition = $conditions[$i + 1];

        switch ($operation) {
            case 'A': // AND
                $result = $result && $condition;
                break;
            case 'O': // OR
                $result = $result || $condition;
                break;
            case 'N': // NOT
                $result = !$result;
                $i--; // NOT operation applies only to the result, so do not move to next condition
                break;
            default:
                throw new Exception("Invalid operation encountered.");
        }
    }

    return $result;
}

// Example usage
$conditions = [true, false, true];
$operations = "AON";

try {
    $result = evaluate_decision_tree($conditions, $operations);
    echo "Result of evaluating decision tree: " . ($result ? "true" : "false") . "<br>";
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage() . "<br>";
}
?>