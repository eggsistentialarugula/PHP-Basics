<?php include "db.php" ?>

<?php
    // * means all, select all from users
    //mysqli_query is a function that sends in $query information

function showAllData(){
    global $connection; //need to declare global variable because functions are local scopes and $connection is from another file
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query FAILED' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function UpdateTable(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    //if you don't put space after SET, there will be an error
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

function deleteRows(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }
}
    


?>