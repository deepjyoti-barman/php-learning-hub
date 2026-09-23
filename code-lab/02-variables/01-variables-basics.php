<?php
$message = "Hello again!";

echo $message;

# ---

// $var;
// echo $var;      // Error: Undefined variable, can't use a variable before assigning any values to it

# ---

// Different variable naming convention
$name          = "Deepjyoti";
$Number        = 10;
$subCategory   = "Adventure";
$brand_name    = "Microsoft";
$ZIP_CODE      = 700102;
$CarModel      = 'Hyundai i10';
$Trip_Distance = 45.5;
$_position     = 'CEO';

// Incorrect variable names
// $$city = "Agartala";
// $7digit = 12;
// $full-name = "Robert Ford";
// $company name = "Tata Consultancy Services";

# ---

// Variables with different cases
// PHP variables are case-sensitive so the two following variable are going to store two different data
$street = 'Central Street';
$Street = 'New Orleans Street';

echo "<br>street = $street";
echo "<br>Street = $Street";

# ---

// Assigning values with HTML tags into variables
$newspaper = "<h1>The Time of India</h1>";
echo "<br>$newspaper";
