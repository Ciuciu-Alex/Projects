<?php
session_start();
$myConnection = mysqli_connect("localhost", "root", "");
mysqli_select_db($myConnection,'contact');

if(isset($_POST["register-btn"])){
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $s = " SELECT * FROM users WHERE name = '$name' AND password = '$pass'";
    $result = mysqli_query($myConnection, $s);
    $num = mysqli_num_rows($result);
    if($num == 1)
    {
        echo "<h3>Hello, $name!</h3>" ;
        echo "<h3 id='userLogat'>$name</h3>" ;
    }
    else{
       echo "<h3>Failed!</h3>";
    }
}
?>