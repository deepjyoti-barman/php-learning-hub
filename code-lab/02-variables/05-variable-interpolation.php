<?php
// Use of escape sequences
$start = '3 o\'clock';
$end = "5 o'clock";

$days = "Monday\nTuesday\nWednesday\nThursday\nFriday";

// Right-click on the browser => View Source to check the correct output
echo $days;
echo "<br>";

// Variable interpolation
$firstName = "John";
$lastName = "Smith";

echo "Hello {$firstName} {$lastName}";