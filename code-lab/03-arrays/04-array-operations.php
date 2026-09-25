<?php
function inspect(array $values): void {
    echo "<pre>";
    print_r($values);
    echo "</pre>";
}

$names = array("John", "Jack", "Jill");
$numbers = [1, 2, 3, 4, 5];

// Add an element to the array
$numbers[] = 6;
inspect($numbers);

// Modify an element of the array
$numbers[2] = 100;
inspect($numbers);

// Remove an element from the array
unset($numbers[2]);
inspect($numbers);

// Re-index the values after removal of an array element
$numbers = array_values($numbers);
inspect($numbers);
