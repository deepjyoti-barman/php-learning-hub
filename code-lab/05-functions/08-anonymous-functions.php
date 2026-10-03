<?php
// An anonymous function is function that does not have a specified name
// Anonymous functions are also called lambda functions
// Unlike standard PHP functions, an anonymous functions can be assigned to a variable
// or passed directly into another function as a callback
// Because it is an assignment expression, it must end with a semicolon
$square = function (string $number): string {
    return $number * $number;
};

$number = 5;
$result = $square($number);
echo "The square of $number is $result<br>";
