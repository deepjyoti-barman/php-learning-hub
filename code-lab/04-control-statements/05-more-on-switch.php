<?php
// We can only compare equality with switch () statement
// Once a matching case block gets executed program control will execute all other following case blocks as well until
// it find the break statement of reaches the end of the switch statement
// Unlike Java, we can have duplicate case blocks as well

// Example using switch ()
$number = 4;
switch ($number) {
    case 10:                            // false
        echo "4 == 10 is true<br>";
        break;
    case 4.01:                          // false
        echo "4 == 4.01 is true<br>";
        break;
    case 4.0:                           // true
        echo "4 == 4.0 is true<br>";
        break;
    case "4":                           // true
        echo "4 == '4' is true<br>";
        break;
    case 4:                             // true
        echo "4 == 4 is true<br>";
        break;
    case 4:                             // true
        echo "4 == 4 is true repeated<br>";
        break;
    case true:                          // true
        echo "This gets automatically executed";
        break;
    default:
        echo "None of the above condition is true";
}
