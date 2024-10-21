<?php

// Section 5: Arrays
/* Question 16: 
Multi-Dimensional Array Manipulation: Given a multi-dimensional array that represents students 
and their exam scores across subjects, write a function that finds the student with the highest 
average score and prints their name and average. */


/**
 * Function to find the student with the highest average score
 * @param array $students - Multi-dimensional array of students and their exam scores
 * @return array - Array containing the name of the top student and their average score
 */
function find_top_student($students) {
    $top_student = '';
    $highest_average = 0;

    // Loop through each student in the array
    foreach ($students as $student_name => $scores) {
        // Calculate the average score for the current student
        $average_score = array_sum($scores) / count($scores);

        // Check if the current student's average score is higher than the current highest average
        if ($average_score > $highest_average) {
            $highest_average = $average_score;
            $top_student = $student_name;
        }
    }

    return array('name' => $top_student, 'average' => $highest_average);
}

// Example usage
$students = array(
    "Alice" => array(90, 85, 88),
    "Bob" => array(92, 87, 85),
    "Charlie" => array(88, 90, 92),
    "Diana" => array(85, 87, 89)
);

$top_student = find_top_student($students);

echo "Top student: " . $top_student['name'] . "<br>";
echo "Average score: " . $top_student['average'] . "<br>";
?>