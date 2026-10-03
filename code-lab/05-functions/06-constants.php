<?php
// In PHP a constant can only be defined once, and we can assign value to a constant once as well
// Traditional way of defining constants
define("APP_NAME", "My App");
define("APP_VERSION", "1.0.0");
//define("APP_VERSION", "2.0.0"); // Warning: Constant APP_VERSION already defined

echo APP_NAME;
echo "<br>";
echo APP_VERSION;
echo "<br>";

// New approach
const DB_NAME = "mydb";
const DB_HOST = "localhost";

echo DB_NAME . " " . DB_HOST . "<br>";


function run(): void {
    // NOTE: Constants can be used directly inside the functions (no need to prefix with global or anything else)
    // NOTE: In PHP, constants cannot be parsed directly inside double-quoted strings.
    // Even if you use curly braces, the {} syntax only works for variables.
    echo "App Name: ", APP_NAME, "<br>";
    printf("App Version: %s<br>", APP_VERSION);
}

run();
