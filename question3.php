<?php

// Section 1: Variables, Constants & Data Types
/* Question 3: 
String Manipulation: Write a PHP program that accepts a multi-sentence paragraph as input, splits 
the sentences into an array, and then reverses the order of the words in each sentence, printing 
the result in one string. */


/**
 * Function to split a paragraph into sentences, reverse the order of words in each sentence,
 * and return the modified paragraph as a single string.
 * @param string $paragraph - Multi-sentence paragraph input
 * @return string - Modified paragraph with reversed words in each sentence
 */
function reverse_words_in_sentences($paragraph) {
    // Split the paragraph into sentences using a period, exclamation mark, or question mark followed by a space
    $sentences = preg_split('/(?<=[.?!])\s+/', $paragraph, -1, PREG_SPLIT_NO_EMPTY);
    
    // Initialize an array to hold the modified sentences
    $reversed_sentences = array();
    
    // Loop through each sentence
    foreach ($sentences as $sentence) {
        // Split the sentence into words
        $words = explode(' ', $sentence);
        
        // Reverse the order of words
        $reversed_words = array_reverse($words);
        
        // Join the reversed words back into a sentence
        $reversed_sentence = implode(' ', $reversed_words);
        
        // Add the modified sentence to the array
        $reversed_sentences[] = $reversed_sentence;
    }
    
    // Join the reversed sentences back into a single string
    $modified_paragraph = implode(' ', $reversed_sentences);
    
    // Return the modified paragraph
    return $modified_paragraph;
}

// Example usage
$paragraph = "Hello world. This is a test. How are you doing?";
$modified_paragraph = reverse_words_in_sentences($paragraph);
echo "Original Paragraph: " . $paragraph . "<br>";
echo "Modified Paragraph: " . $modified_paragraph . "<br>";
?>