<?php
// Function with default arguments/values
function sayHello(string $name = 'World'): string {
    return "Hello {$name}!<br>";
}

echo sayHello();
echo sayHello("John");
