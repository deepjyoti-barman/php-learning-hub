<?php
function inspect(array $value): void {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
//    die();
}

$names = array("John", "Jack", "Jill");
$numbers = [1, 2, 3, 4, 5];

inspect($names);
inspect($numbers);
