<?php
$favoriteColor = null;

// Using ternary operator
$color = isset($favoriteColor) ? $favoriteColor : "Blue";
echo $color, "<br>";

// Using null coalescing operator
$favoriteColor = "Green";
$color = $favoriteColor ?? "Blue";
echo $color, "<br>";

# ---

// Multiple comparisons with ternary operator
$favoriteColor = null;
$secondFavoriteColor = null;

$color = (isset($favoriteColor) ? $favoriteColor : isset($secondFavoriteColor)) ? $secondFavoriteColor : "Black";
echo $color, "<br>";

// Clean multiple comparisons with null coalescing operator
$color = $favoriteColor ?? $secondFavoriteColor ?? "White";
echo $color;
