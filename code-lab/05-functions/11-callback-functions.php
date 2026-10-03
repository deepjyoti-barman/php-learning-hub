<?php
// Another way that we can use anonymous functions is to pass it as an argument
// to another function, and this is called a callback function
// And it gets passed in and called back later on within the function that it was passed into
function inspect(array $values): void {
    echo "<pre>";
    print_r($values);
    echo "</pre>";
}

$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(function ($number) {
    return $number * $number;
}, $numbers);

inspect($squaredNumbers);

# ---

// Creating a user defined callback function
function applyCallback(Closure $callback, int $value) {
    return $callback($value);
}

// Double the given number
$double = function ($number) {
    return $number * 2;
};

$result1 = applyCallback($double, 5);
echo $result1 . "<br>";

// Cube of the given number
$result2 = applyCallback(function ($number) {
    return $number * $number * $number;
}, 10);

echo $result2 . "<br>";
