<?php
function sayHello(): void {
    echo "Hello World!<br>";
}

function sayGoodbye(): string {
    return "Goodbye World!<br>";
}

sayHello();
sayHello();
sayHello();

$message = sayGoodbye();
echo $message;
