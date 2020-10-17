<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo 150 + 30;
    echo "<br>";
    echo 100 - 80;
    echo "<br>";
    echo 100 * 8;
    echo "<br>";
    echo 100/8;

    echo "<br>";

    echo 45 + 34 * 45 /421 - 45;
    echo "<br>";
    echo (5 + 5) * 10;
    
    echo "<br>";

    $number1 = 12;
    $number2 = 24;

    echo $number1 * $number2;
    echo "<br>";
    echo(pi());
    echo "<br>";
    echo(min(0, 150, 30, 20, -8, -200) . "<br>");
    echo(max(0, 150, 30, 20, -8, -200) . "<br>");
    echo(abs(-6.7) . "<br>");
    echo(sqrt(64) . "<br>");
    echo(round(0.60) . "<br>");  // returns 1
    echo(round(0.49)) . "<br>";  // returns 0
    echo(rand() . "<br>");
    echo(rand(10,100));
    ?>
</body>
</html>