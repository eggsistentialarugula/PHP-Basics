<?php 
    $connection = mysqli_connect('localhost', 'root','root', 'loginapp');

    if($connection){
        echo "We are connected";
    }else{
        die("Database connection failed");
    }

    // * means all, select all from users

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query FAILED' . mysqli_error());
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-xs-6">

        <!-- get data from mysql -->

        <?php

        while($row = mysqli_fetch_assoc($result)){

            ?>

            <pre>

            <?php
            print_r($row);
            ?>

            </pre>

            <?php
            

        }


        ?>
            
        </div>
    
    </div>
    
</body>
</html>