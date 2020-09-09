<?php
session_start();
$myConnection = mysqli_connect("localhost", "root", "");
mysqli_select_db($myConnection,'test');

if(isset($_POST["user"]) && isset($_POST["password"])){
    $name = $_POST['user'];
    $pass = $_POST['password'];
    $s = " SELECT * FROM users WHERE name = '$name'";
    $result = mysqli_query($myConnection, $s);
    
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo" Username Already Taken";
    }
    else{
        $reg = " INSERT INTO users(name , password) VALUES ('$name' , '$pass')";
        mysqli_query($myConnection, $reg);
        echo" Registration Successful";
    }
}

?>