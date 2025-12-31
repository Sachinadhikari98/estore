<?php
require_once "database.php";
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE email='$email'";
$res = mysqli_query($db_connection, $query);
$count = mysqli_num_rows($res);
if($count>1){
    $row = mysqli_fetch_assoc($res);
    if(password_verify($password))

    }else{
    echo "invalid user";
}
