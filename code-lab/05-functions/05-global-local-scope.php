<?php
// Scope refers to the visibility of variables and the context of where they are defined
// and where they are used

// Global scope
$name = "Alice";
echo $name . "<br>";    // Alice

// Accessing global variables inside the local scope of functions
// Not allowed
function sayHello1(): void {
    echo "Hello " . $name . "<br>"; // Warning: Undefined variable $name
}

sayHello1();            // Hello

// Allowed
function sayHello2(string $name): void {

    // Local scope
    echo "Hello {$name}<br>";
}

sayHello2($name);       // Hello Alice


// Allowed
function sayHello3(string $name): void {
    global $name;
    echo "Hello {$name}<br>";

    // Changing the value of global variable
    $name = "Bob";

    // Declaring and assigning value to a new local variable
    $address = "71 Downhill Street, New York";
}

sayHello3($name);       // Hello Alice

echo "Hello {$name}<br>";   // Hello Bob

// Accessing the local variable of the function in the global scope
echo $address;          // Warning: Undefined variable $address in
