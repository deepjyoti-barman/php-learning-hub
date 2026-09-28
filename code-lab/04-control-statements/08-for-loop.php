<?php
// for loop
// for loops are used to execute some code a specific number of times
// When you know in advance how many times you want the code to run
/*
- Syntax:
    for (initializer; condition; increment_initializer) {
        ...
        ...
    }
*/
for ($month = 1; $month <= 12; $month++) {
    echo $month . ", ";
}
