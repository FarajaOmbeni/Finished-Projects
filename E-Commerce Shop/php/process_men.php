<?php

require("connect.php");

$name = $_POST['product_name'];
$price = $_POST['price'];
$id = $_POST['product_id'];
$image = $_POST['product_image'];

if(isset($_POST['add_to_cart'])){
    $sql = "insert into cart (product_id, product_name, product_image, price) values ('$id', '$name', '$image', '$price')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "products added in cart";
    }else {
        echo "product not addded".mysqli_error($conn);
    }

    
}




?>