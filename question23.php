<?php

// Section 6: Functions
/* Question 23: 
Function Chaining: Implement a class with methods that manipulate strings (e.g., uppercase, 
reverse, add prefix/suffix). The methods should be chainable, allowing multiple operations on a 
string in a single statement. */


class StringManipulator {
    private $string;

    // Constructor to initialize the string
    public function __construct($string = '') {
        $this->string = $string;
    }

    // Method to convert the string to uppercase
    public function toUpperCase() {
        $this->string = strtoupper($this->string);
        return $this;
    }

    // Method to reverse the string
    public function reverse() {
        $this->string = strrev($this->string);
        return $this;
    }

    // Method to add a prefix to the string
    public function addPrefix($prefix) {
        $this->string = $prefix . $this->string;
        return $this;
    }

    // Method to add a suffix to the string
    public function addSuffix($suffix) {
        $this->string = $this->string . $suffix;
        return $this;
    }

    // Method to get the final string
    public function getString() {
        return $this->string;
    }
}

// Example usage
$manipulator = new StringManipulator("hello");

// Chaining methods
$result = $manipulator->toUpperCase()->reverse()->addPrefix("Start: ")->addSuffix(" :End")->getString();

echo "Final result: " . $result;
?>