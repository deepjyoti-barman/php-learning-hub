<?php
/*
- `Y` - The year
- `m` - The month
- `d` - The day
- 'D' - The day of the week short name
- `l` - The full day of the week name
- `h` - The hour
- `i` - The minute
- `s` - The second
- `a` - am/pm
- `A` - AM/PM
*/

// Get the current year information
$output = date('Y');
echo "date('Y') = $output";
echo "<br>";

// Get the year from timestamp
$output = date('Y', 936345600);
echo "date('Y', 936345600) = $output";
echo "<br>";

$output = date('Y', strtotime('-1 year'));
echo "date('Y', strtotime('-1 year')) = $output";
echo "<br>";

// Get the current month information
$output = date('m');
echo "date('m') = $output";
echo "<br>";

// Get the current date information
$output = date('d');
echo "date('d') = $output";
echo "<br>";

// Get the current day information
$output = date('D');
echo "date('d') = $output";
echo "<br>";

$output = date('l');
echo "date('l') = $output";
echo "<br>";

// Get the date in a specific format
$output = date('Y-m-d');
echo "date('Y-m-d') = $output";
echo "<br>";

// Get the time in a specific format
// We can change default timezone in php.ini and .htaccess files as well
date_default_timezone_set('Asia/Kolkata');
$output = date('h:i:s a');
echo "date('h:i:s A') = $output";
echo "<br>";
