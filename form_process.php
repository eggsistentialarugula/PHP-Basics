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