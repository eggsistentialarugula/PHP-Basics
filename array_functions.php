<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $list = [343, 34, 323, 23, 54, 232, 453];
    echo max($list);
    echo "<br>";
    echo min($list);
    echo"<br>";

    sort($list);
    print_r($list);
    echo "<br>";

    $stack = array("orange", "banana", "apple", "raspberry");
    print_r($stack);
    echo "<br>";
    $fruit = array_pop($stack);
    print_r($fruit); //outputs rasberry, the element that was popped out
    echo "<br>";
    print_r($stack);

    ?>
</body>
</html>