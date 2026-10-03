<?php
// By-Reference Capture (&)
// If you want the closure to modify the external variable, or if you need it to reflect real-time updates to that
// variable, prepend it with an ampersand (&)
$counter = 0;

$increment = function () use (&$counter) {
    $counter++;
};

$increment();
$increment();

echo "Value of counter = {$counter}<br>";  // Value of counter = 2

# ---

// The following function is returning another function called as closure
function createCounter(): Closure {
    $count = 0;

    $incr = function () use (&$count) {
        return ++$count;
    };

    return $incr;
}

$increaseCount = createCounter();

echo $increaseCount() . "<br>";
echo $increaseCount() . "<br>";
echo $increaseCount() . "<br>";
