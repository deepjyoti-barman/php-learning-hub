<?php
// Arrow functions are introduced in PHP 7.4
// They are special type of anonymous function, and they allow us to write just one-liner functions
// - very clear, concise and short

// Usual anonymous function
$add1 = function ($num1, $num2){
    return $num1 + $num2;
};

// Arrow function
// PHP arrow functions are meant to be one-liner, small helper functions
// So the function body cannot be expanded into multiple lines using braces
$add2 = fn ($num1, $num2) => $num1 + $num2;

echo $add1(1, 2) . "<br>";
echo $add2(3, 4) . "<br>";

# ---

// Arrow functions use as callbacks
function inspect(array $values): void {
    echo "<pre>";
    print_r($values);
    echo "</pre>";
}

$numbers = [1, 2, 3, 4, 5];
$squaredNumbers = array_map(fn ($numbers) => $numbers * $numbers, $numbers);

inspect($squaredNumbers);
