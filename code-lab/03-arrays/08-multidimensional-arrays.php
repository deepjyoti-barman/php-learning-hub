<?php
function inspect(array $values): void {
    echo "<pre>";
    print_r($values);
    echo "</pre>";
}

// Arrays of mixed types
$price = 2.45;
$itemName = "Detol Handwash";
$isExtraCarryBagRequired = true;
$onlinePaymentMode = null;

$shoppingCart = [$price, $itemName, $isExtraCarryBagRequired, $onlinePaymentMode];
inspect($shoppingCart);
echo "------------------------------------------<br>";


# ---

// Multidimensional arrays - simple
// These kind of arrays are useful for representing tables of data
$fruits = [
    ["Apple", "Red"],
    ["Banana", "Yellow"],
    ["Orange", "Orange"],
    ["Grape", "Purple"]
];
inspect($fruits);
var_dump($fruits[3][0]);
echo "<br>------------------------------------------<br>";


// Multidimensional arrays - associative
// Name | Email | Height
// Alice | alice@example.com | 1.80
// Bob | bob@example.com | 1.67
// Carol | carol@example.com | 1.74

$alice = [
    "name" => "Alice",
    "email" => "alice@example.com",
    "height" => 1.80
];

$bob = [
    "name" => "Bob",
    "email" => "bob@example.com",
    "height" => 1.67
];

$carol = [
    "name" => "carol",
    "email" => "carol@example.com",
    "height" => 1.74
];

$people = [$alice, $bob, $carol];
inspect($people);
var_dump($people[0]["email"]);
echo "------------------------------------------<br>";
