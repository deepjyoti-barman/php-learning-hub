<?php
// Built-in PHP Functions
// rand() = Generate a random number
$output = rand();
echo "rand() = $output";
echo "<br>";

$output = getrandmax();
echo "getrandmax() = $output";
echo "<br>";

// Returns a random number between 1 and 10 (inclusive)
$output = rand(1, 10);
echo "rand(1, 10) = $output";
echo "<br>";

# ---

// round()
$output = round(4.2);
echo "round(4.2) = $output";
echo "<br>";

// ceil()
$output = ceil(4.2);
echo "ceil(4.2) = $output";
echo "<br>";

// floor()
$output = floor(4.9);
echo "floor(4.9) = $output";
echo "<br>";

// sqrt()
$output = sqrt(256);
echo "sqrt(256) = $output";
echo "<br>";

// pi()
$output = pi();
echo "pi() = $output";
echo "<br>";

// pow()
$output = pow(2, 3);
echo "pow(2, 3) = $output";
echo "<br>";

// abs()
$output = abs(-4.7);
echo "abs(-4.7) = $output";
echo "<br>";

// max()
$output = max(1, 2, 3, -8, 50, 4, 9);
echo "max(1, 2, 3, -8, 50, 4, 9) = $output";
echo "<br>";

$output = max([1, 10, -2, 3, 5, 8, 0]);
echo "max([1, 10, -2, 3, 5, 8, 0]) = $output";
echo "<br>";

// min()
$output = min(1, 2, 3, -8, 50, 4, 9);
echo "min(1, 2, 3, -8, 50, 4, 9) = $output";
echo "<br>";

$output = min([1, 10, -2, 3, 5, 8, 0]);
echo "min([1, 10, -2, 3, 5, 8, 0]) = $output";
echo "<br>";

// number_format()
$output = number_format(1234567.191234, 2, '.', ',');
echo "number_format(1234567.191234, 2, '.', ',') = $output";
echo "<br>";
