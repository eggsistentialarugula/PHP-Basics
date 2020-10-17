<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $number = 10;

    switch($number){
        case 34:
            echo "it is 34";
        break;
        case 36:
            echo "it is 36";
        break;
        case 10:
            echo "it is 10";
        break;
        case 80:
            echo "it is 80";
        break;

        default:
        echo "we could not find anything";
        break;
        
    }

    ?>
</body>
</html>