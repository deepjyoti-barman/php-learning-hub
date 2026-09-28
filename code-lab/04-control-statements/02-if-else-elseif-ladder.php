<?php
// if-else-elseif ladder
// elseif can be used along with if to do something else based on certain other conditions
$hour = 20;

if ($hour < 12) {
    echo "Good morning!";
} elseif ($hour < 18) {
    echo "Good afternoon!";
} elseif ($hour < 22) {
    echo "Good evening!";
} else {
    echo "Good night!";
}

