<?php

// nested for-loop
echo "Nested for-loop <br>";
for ($i = 0; $i < 5; $i++) {

    for ($j = 0; $j < 5; $j++) {
        echo $i . ' - ' . $j . '<br>';
    }
}
echo "-----------------------------------------<br>";

// nested while-loop
echo "Nested while-loop <br>";
$i = 0;

while ($i < 5) {
    $j = 0;

    while ($j < 5) {
        echo $i . ' - ' . $j . '<br>';
        $j++;
    }
    $i++;
}
