<?php
// Capturing Surrounding Scope with `use` Keyword
// By default, PHP anonymous functions do not have access to variables defined outside their immediate scope
// To capture variables from the parent scope, one must explicitly declare them using the `use` keyword

// By-Value Capture (Default)
// When you pass a variable using `use`, PHP takes a snapshot copy of its value at the time of the function is defined
// Changing the variable inside the closure will not modify the original variable
$message = "Welcome to PHP";

$printMessage = function () use ($message) {
    echo $message;
};

$message = "Welcome to Laravel"; // Changing the parent variable after definition
$printMessage();                 // Welcome to PHP
