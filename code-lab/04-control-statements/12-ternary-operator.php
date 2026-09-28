<?php
$score = 50;

// using if-else
if ($score > 40) {
    echo "High Score";
} else {
    echo "Low Score";
}
echo "<br>";

// using ternary operator
$result = $score > 40 ? "High Score" : "Low Score";
echo $result;
