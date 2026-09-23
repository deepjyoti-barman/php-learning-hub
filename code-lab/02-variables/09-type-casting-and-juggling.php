<?php
$number1 = 5;
$number2 = 10;
$number3 = "20";
$fruit = "apple";
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit conversion
// Type juggling
$result = $number1 + $number2;
var_dump($result);
echo "<br>";

$result = $number1 + $number3;  // int (string to int conversion)
var_dump($result);
echo "<br>";

$result = $number3 + $number3;  // int (string to int conversion)
var_dump($result);
echo "<br>";

$result = $number1 . $number2;  // string (int to string conversion)
var_dump($result);
echo "<br>";

//$result = $fruit + $number2;    //  Uncaught TypeError: Unsupported operand types: string +

$result = $number1 + $bool1;    // int (bool to int conversion) ($bool1 = 1)
var_dump($result);
echo "<br>";

$result = $number1 + $bool2;    // int (bool to int conversion) ($bool2 = 0)
var_dump($result);
echo "<br>";

$result = $number1 + $null;     // int (null to int conversion) ($null = 0)
var_dump($result);
echo "<br>";

# ---

// Explicit conversion
// Type casting
$result = (string) $number2;
var_dump($result);

