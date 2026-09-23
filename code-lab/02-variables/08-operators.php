<?php
// Arithmetic operations on integers
$count = 10;
$size = 2;

var_dump($count + 5);
var_dump($count * $size);

# ---

// Arithmetic operations on floats
$price = 2.95;
$quantity = 5;

var_dump($price * $quantity);

# ---

// String concatenation operator
$message = "Hello";
$name = "Dave";

echo $message . " " . $name . " ";

# ---

// Operation: string and int
$cost = "150";
$amount = 3;

// Type of $cost is changed to integer
// This is known as type juggling or type conversion
// This is done automatically by PHP whenever necessary
$cost = $cost * $amount;
var_dump($cost);

# ---

// Logical operators
$isEditor = true;
$isAdmin = false;

var_dump(!$isEditor);
var_dump($isEditor && $isAdmin);
var_dump($isEditor and $isAdmin);
var_dump($isEditor || $isAdmin);
var_dump($isEditor xor $isAdmin);
