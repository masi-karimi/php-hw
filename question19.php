<?php

// Section 5: Arrays
/* Question 19: 
Associative Array Merge: Given two associative arrays of student names and their scores, merge 
the two arrays into one while keeping the higher score for students who appear in both arrays. */


/**
 * Function to merge two associative arrays of student scores, keeping the higher score for duplicates
 * @param array $array1 - First associative array of student scores
 * @param array $array2 - Second associative array of student scores
 * @return array - Merged associative array with the higher scores
 */
function merge_student_scores($array1, $array2) {
    // Merge the two arrays
    $merged_array = $array1;
    
    // Loop through the second array and merge it with the first array
    foreach ($array2 as $student => $score) {
        if (isset($merged_array[$student])) {
            // If the student is already in the merged array, keep the higher score
            $merged_array[$student] = max($merged_array[$student], $score);
        } else {
            // If the student is not in the merged array, add the student and their score
            $merged_array[$student] = $score;
        }
    }
    
    return $merged_array;
}

// Example usage
$scores1 = array(
    "Alice" => 85,
    "Bob" => 78,
    "Charlie" => 90,
    "Diana" => 92
);

$scores2 = array(
    "Alice" => 88,
    "Eve" => 76,
    "Charlie" => 85,
    "Frank" => 80
);

$merged_scores = merge_student_scores($scores1, $scores2);

echo "Merged scores array: <br>";
print_r($merged_scores);
?>