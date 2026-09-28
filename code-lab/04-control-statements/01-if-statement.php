<?php
// if statement
// it is a logical expression in PHP which helps us execute something based on certain conditions
$articles = [];

if (empty($articles)) {
    echo "The articles array is empty.";
}
echo "<br>";

# ---

// if-else statement
$colors = ["red", "green", "blue", "yellow"];

if (empty($colors)) {
    echo "The colors array is empty.";
} else {
    echo "The colors array is not empty.";
}
echo "<br>";

# ---

# if-else construct with comparison operators
/*
| Comparision Operators
| Operator | Description              |
| -------- | ------------------------ |
| ==       | Equal to                 |
| ===      | Identical to             |
| !=       | Not equal to             |
| <>       | Not equal to             |
| !==      | Not identical to         |
| <        | Less than                |
| >        | Greater than             |
| <=       | Less than or equal to    |
| >=       | Greater than or equal to |
*/
$age = 21;

if ($age >= 18) {
    echo "Eligible to vote.<br>";
} else {
    echo "Not eligible to vote.<br>";
}

if (3 == '3') {
    echo "3 == '3' is true<br>";
} else {
    echo "3 == '3' is false<br>";
}

if (3 === '3') {
    echo "3 === '3' is true<br>";
} else {
    echo "3 === '3' is false<br>";
}

# ---

// Nested if statement
$age = 13;

if ($age >= 21) {
    echo "You are old enough to drink and eligible to vote<br>";
} else {
    if ($age >= 18) {
        echo "You are old enough to vote<br>";
    } else {
        echo "You are not old enough to drink or vote<br>";
    }
}
