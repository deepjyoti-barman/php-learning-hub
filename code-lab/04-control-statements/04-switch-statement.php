<?php
// switch statement
// switch statement is useful for testing one condition against multiple values
$day = "Tue";

switch ($day) {
    case "Mon": echo "Monday";
        break;
    case "Tue":echo "Tuesday";
        break;
    case "Wed": echo "Wednesday";
        break;
    case "Thu": echo "Thursday";
        break;
    case "Fri": echo "Friday";
        break;
    case "Sat": echo "Saturday";
         break;
    case "Sun": echo "Sunday";
        break;
    default:
        echo "No information available for that day.";
}
