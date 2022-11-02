<?php
require_once("connect.php");
session_start();


if (isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

if(empty($email) || empty($password)){
    echo "Please fill in your details";
} else {
    if($_POST['role']=="1"){
        $sql = "select * from admin where email = '$email' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        if($row = mysqli_fetch_assoc($result)){
        $password = $row['password'];
        $_SESSION['email'] = $email;
        header("location:add_cat.php");} else {echo "Invalid details";}}

        else if($_POST['role']=="2"){
        $sql = "select * from customer where email = '$email' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        if($row = mysqli_fetch_assoc($result)){
        $password = $row['password'];
        $_SESSION['email'] = $email;
        header("location:user_login.php");} else {echo "Invalid details";}} 
        
        else if($_POST['role']=="3"){
        $sql = "select * from seller where email = '$email' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        if($row = mysqli_fetch_assoc($result)){
        $password = $row['password'];
        $_SESSION['email'] = $email;
        header("location:add_product.php");} else {echo "Invalid details";}}

        else {
        echo "Incorrect Password!";
        } 

}   
}else{
   
}
?>