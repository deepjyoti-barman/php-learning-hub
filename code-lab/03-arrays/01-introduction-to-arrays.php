<?php
// An array is a data structure that can hold multiple values of different data types in a single variable

// Create an array: With square brackets
$fruits = ["Apple", "Banana", "Orange"];

// Display the array
// print_r() function prints the structure of an array
print_r($fruits);
//echo $fruits;         // Warning: Array to string conversion
echo "<br>";

# ---

// Create an array; With array() function
$articles = array("First post", "Second post", "Another post");
print_r($articles);
echo "<br>";

// Accessing the elements of the array via indexes
var_dump($articles[0]);
echo "<br>";
var_dump($articles[2]);
echo "<br>";
//echo $articles[3];      // Warning: Undefined array key 3
