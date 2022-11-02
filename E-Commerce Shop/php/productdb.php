<?php
    require_once("connect.php");

    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);
    $test = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(isset($GET["edit"])){
        $id = $GET["edit"];
        $sql = "SELECT * FROM tbl_users WHERE user_id=$id";
    }
?>

