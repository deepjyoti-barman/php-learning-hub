<?php
$string = "Hello World";

// strlen()
$output = strlen($string);
echo "strlen($string) = $output";
echo "<br>";

// str_word_count()
$output = str_word_count($string);
echo "str_word_count($string) = $output";
echo "<br>";

// strpos()
$output = strpos($string, 'World');
echo "strpos($string, 'World') = $output";
echo "<br>";

// Get specific character by index
$output = $string[2];
echo "\$string[2] = $output";
echo "<br>";

// substr()
$output = substr($string, 6, 3);
echo "substr($string, 6, 3) = $output";
echo "<br>";

// str_replace()
$output = str_replace('World', 'Universe', $string);
echo "str_replace('World', 'Universe', $string) = $output";
echo "<br>";

// strtolower()
$output = strtolower($string);
echo "strtolower($string) = $output";
echo "<br>";

// strtoupper()
$output = strtoupper($string);
echo "strtoupper($string) = $output";
echo "<br>";

// ucwords()
$output = ucwords($string);
echo "ucwords($string) = $output";
echo "<br>";

// trim()
$output = trim('      Hello    ');
echo "trim('      Hello    ') = $output";
echo "<br>";
