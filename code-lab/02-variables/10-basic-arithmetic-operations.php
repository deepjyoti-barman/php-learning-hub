<?php
// Basic Arithmetic operations
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | ---------------|
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/
echo "55 + 45 = "      . 55 + 45;
echo "<br>55 - 45 = " . 55 - 45;
echo "<br>55 * 45 = " . 55 * 45;
echo "<br>55 / 45 = " . 55 / 45;
echo "<br>3 % 2 = "   . 3 % 2;

# ---

// Evaluating complex expressions
$exp = 5 * 4 * 12 / 2;
echo "<br>exp = $exp";

# ---

// Order of operations [Operator precedence and associativity]
// / and * operator has higher precedence than + and -
// Hence, 5 / 10 = 0.5 + 5 = 5.5
$result1 = 5 + 5 / 10;
echo "<br>result1 = " . $result1;

# ---

// If you want to change the order of operation surround the desired operation which you want to evaluate first with a pair of parenthesis like below:
$result2 = (5 + 5) / 10;
echo "<br>result2 = " . $result2;
