<?php
    require_once("connect.php");

    $sql1 = "SELECT * FROM seller";
    $sql2 = "SELECT * FROM customer";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    $test1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
    $test2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

    if(isset($GET["edit"])){
        $id = $GET["edit"];
        $sql = "SELECT * FROM tbl_users WHERE user_id=$id";
    }
?>

