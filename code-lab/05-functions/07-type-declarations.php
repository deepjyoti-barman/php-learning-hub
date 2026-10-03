<?php
// PHP is a dynamically typed language but we do have the option for strict types
declare(strict_types=1);

function getSum(int $num1, int $num2): int {
    return $num1 + $num2;
}

echo getSum(1, 2);
echo "<br>";
//echo getSum(1, "2"); // Fatal error: Uncaught TypeError: getSum(): Argument #2 ($num2) must be of type int, string given

# ---
function greetings(string $name): void {
    echo "Hello $name!";
}

greetings("John Doe");
