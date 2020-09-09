<?php
session_start();
$myConnection = mysqli_connect("localhost", "root", "");
mysqli_select_db($myConnection,'contact');

if(isset($_POST["name"]) && isset($_POST["password"])){
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $s = " SELECT * FROM users WHERE name = '$name' AND password = '$pass'";
    $result = mysqli_query($myConnection, $s);
    
    $num = mysqli_num_rows($result);
    if($num == 1)
    {
        echo" <h3>Username Already Taken</h3>";       
    }
    else{
        $reg = " INSERT INTO users(name , password) VALUES ('$name' , '$pass')";
        mysqli_query($myConnection, $reg);
        echo" <h3>Registration Successful</h3>";
        
    }
}
?>