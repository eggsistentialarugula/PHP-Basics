<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// There are two ways to delcare arrays
$numberList = array();
$numberList = [];

$numList = array(267,8765,345,'5435',345,'<h1>Hello</h1>');

// function print_r to print out an arrays shit
print_r($numList);

// display index whatever
echo $numList[2];

?>
</body>
</html>