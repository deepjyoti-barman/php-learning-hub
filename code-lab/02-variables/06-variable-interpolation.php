<?php
// Use of escape sequences
$start = '3 o\'clock';
$end = "5 o'clock";

// Double quotes allows us to make use of escape sequences
$days = "Monday\nTuesday\nWednesday\nThursday\nFriday";

// Right-click on the browser => "View Source" to check the correct output
echo $days;
echo "<br>";

// Variable interpolation
$firstName = "John";
$lastName = "Smith";

echo "Hello " . $firstName . " " . $lastName;
echo "<br>";

// Double quotes also allows us to use the cleaner string interpolation
echo "Hello {$firstName} {$lastName}";
