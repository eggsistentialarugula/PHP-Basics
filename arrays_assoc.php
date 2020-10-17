<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
<?php
$number = array('jeannie', 'janice', 'alice');

print_r($number);
//echo $number[2] . "<br>";

echo "<br>";

// Changed name of the key of first index to first_name and last index to last_name

$names = array("first_name" => 'Baby', "last_name" => 'Seal');

print_r($names);

// you can refer to the value in the Associative array by label
//output first name and last name

echo $names['first_name'] . " " . $names['last_name'];

?>
</body>
</html>