<!-- super global -->
<!-- saving all our post data from forms -->

<?php
if(isset($_POST['submit'])){
    
    $name = array("Ybabbb", "Pinniped", "Peckel", "Duck", "Mochi", "Dolphin");
    $minimum = 5;
    $maximum = 10;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < $minimum){
        echo "Username has to be longer than five";
    }

    if(strlen($username) > $maximum){
        echo "Username has to be shorter than ten";
    }

    if(!in_array($username, $name)){
        echo "sorry you are not allowed";
    }else{
        echo "Welcome";
    }

    // echo "Hello " . $username;
    // echo "Your password is: " . $password;
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- need to receive post -->
    <form action="form.php" method = "post">

        <input type="text" name ="username" placeholder = "Enter Username">
        <input type="password" name = "password" placeholder = "Enter Password">
        <br>
        <input type="submit" name = "submit">
    
    </form>
</body>
</html>