<?php
// Function parameters are $num1, and $num2
function add(int $num1, int $num2): int {
    return $num1 + $num2;
}

// Function arguments are the actual values that we are passing in from the function call
echo add(2, 3), "<br>";
echo add(100, 250), "<br>";
