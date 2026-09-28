<?php
// do-while loop
// Do while loop will at least execute the body of the loop once
// irrespective of the condition matches or not
/*
- Syntax:

    initializer;
    do {
        ...
        ...
        increment_initializer
    } while (condition);
*/
$init = 0;

do {
    echo $init . "<br>";
    $init++;
} while ($init < 10);
