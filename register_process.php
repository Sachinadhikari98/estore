<?php
if(isset($_POST)){

$name = $phone = $email = $password = "";
if(isset($POST["full_name"]) & !empty($_POST["full_name"])){
    $name = $_POST["full_name"];
}
else{
    header("Location:register.php?name_error=1");
}
$name = $_POST["full_name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$password = $_POST["password"];

$query = "INSERT INTO user (full_name, phone, email, password) VALUES ('$name', '$phone', '$email', '$password')";

$res = mysqli_query($db_connection, $query);
if($res){
    echo "Registration successful.";
}
else{
    echo "Registration failed. Please try again.";
}
}else{
    header("Location:register.php");
}

?>