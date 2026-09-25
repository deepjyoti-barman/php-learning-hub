<?php

$weekdays = ["Mon", "Tue", "Wed", "Thu", "Fri"];
$users = [
    ["name" => "John", "email" => "john@example.com"],
    ["name" => "Jane", "email" => "jane@example.com"],
    ["name" => "Joe", "email" => "joe@example.com"],
    ["name" => "Jerry", "email" => "jerry@example.com"]
];

// Using a for-loop
echo "Using a for loop:";
for ($i = 0; $i < count($weekdays); $i++) {
    echo $weekdays[$i] . " ";
}
echo "<br>";

// Using a for-each loop
echo "Using a for-each loop:";
foreach ($weekdays as $weekday) {
    echo $weekday, " ";
}
echo "<br>";

// Using a for-each loop with index
echo "Using a for-each loop with index: ";
foreach ($weekdays as $index => $weekday) {
    echo "{$index}={$weekday} | ";
}

// Using a for-each loop with associative array
foreach ($users as $user) {
    foreach ($user as $key => $value) {
        echo "{$key}={$value} | ";
    }
    echo "<br>";
}

