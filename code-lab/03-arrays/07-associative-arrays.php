<?php
// Associative arrays
// NOTE: You can only use strings and integers as indexes
$colors = [
    "two" => "Red",
    "four" => "Green",
    "six" => "Blue"
];
var_dump($colors["four"]);
echo "<br>";

// An associative array is one which has elements with labels (i.e. elements are there in the form of key-value pair)
// Normal Array
$studentRecord = array(1, "Deepjyoti", "Barman", "CSE");

// Accessing values from a normal array
echo $studentRecord[1] . " ";
echo "<br>";

// Associative Array
$studentRecordAssoc = array(
    "id" => 1,
    "first_name" => "Deepjyoti",
    "last_name" => "Barman",
    "department" => "CSE",
    "hobbies" => ["Tennis", "Video Games"]
);

// Accessing values from an associative array
//echo $studentRecordAssoc[2];       // Warning: Undefined array key 2
echo $studentRecordAssoc["last_name"];
echo "<br>";
print_r($studentRecordAssoc["hobbies"]);
