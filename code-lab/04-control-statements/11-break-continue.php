<?php
// break statement
echo "Demonstration of breakk statement:<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }

    echo $i . "<br>";
}

// continue statement (skip a iteration)
echo "Demonstration of continue statement:<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }

    echo $i . "<br>";
}
