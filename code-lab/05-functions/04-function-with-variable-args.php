<?php

// ... = splat operator
function addAll(int ...$numbers): int {
    $total = 0;

    foreach ($numbers as $number) {
        $total += $number;
    }

    return $total;
}

echo addAll(1, 2, 3, 4, 5, 6, 7, 8, 9);
