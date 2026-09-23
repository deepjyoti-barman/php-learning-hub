<?php
// string
$message = "Hello";
$error = "Invalid password";
$address = "https://google.com";
$firstName = "John";

// Number: int (integer)
$count = 10;
$minimumAge = 18;
$size = 150;
$absoluteZero = -273;

// Number: float
$pi = 3.14159;
$price = 2.99;
$exchangeRate = 1.456;
$temperature = -21.34;

var_dump($message);
echo "<br>";
var_dump($count);
echo "<br>";
var_dump($price);
echo "<br>";
echo "<br>";

# ---

echo getType($message);
echo "<br>";
echo getType($count);
echo "<br>";
echo getType($price);
echo "<br>";
