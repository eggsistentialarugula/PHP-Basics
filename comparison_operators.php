<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

if(4 == "4"){
    echo "this expression will be true because it's the equal operator and doesn't check for datatype";
    echo "<br>";
}

//This expression is not true because it's the identical operator which checks for datatypes and these two are not identical because 4 is an interger and "4" is a string.
if(4 === "4"){
    echo "I won't be echo'ed";
}

if(4 === "4" || 5 < 10){
    echo "This statement is true as long as one expression is true. || needs only one to be true.";
    echo "<br>";
}
if(4 === 4 && 5 < 10){
    echo "this statement is true because both expressions are true. && needs everything to be true.";
    echo "<br>";
}
if(4 === 4 || 2 > 10 || 20 < 10 || 4 === "4")
    echo "Will this be true?";


?>
    
</body>
</html>