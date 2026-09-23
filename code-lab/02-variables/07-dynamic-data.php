<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Data Dynamically in PHP</title>
</head>
<body>
<?php
// The whole idea is to import variables from a file (.php) and use that variable in numerous places of one or multiple
// webpages, thus later on at some point of time in the future if we need some modification we can do it in just one
// place and changes will be reflecting in all other pages. This will reduce the overhead of going to each file and
// doing the modification there, which is quite error-prone and maintenance of such pages are not easy.

$var = "Microsoft";
?>

<?php echo $var ?> Corporation is an American multinational technology company with
headquarters in Redmond, Washington. <br/>

<?php echo $var ?> develops, manufactures, licenses, supports, and sells computer software, consumer electronics,
personal computers, and related services.
</body>
</html>
