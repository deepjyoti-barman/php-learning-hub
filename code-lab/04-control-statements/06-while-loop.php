<?php
// while loop
// A while loop simply runs code continuously as long as the condition is true
// This means at some point inside the loop you need to change the condition to false
// otherwise the loop would run forever
/*
- Syntax:

    initializer
    while (condition) {
        ...
        ...
        increment_initializer
    }
*/
$month = 1;

while ($month <= 12) {
    echo $month . ", ";
    $month = $month + 1;
}
