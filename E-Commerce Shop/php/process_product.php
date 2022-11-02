<?php
    require('connect.php');
    
    if (isset($_POST['upload'])){

        $filename = $_FILES['product_image']['name'];
        $temp_name = $_FILES['product_image']['tmp_name'];
        $folder = "uploads/".$filename;


     
        $product_name = $_POST['product_name'];
        $product_description = $_POST['product_description'];
        $unit_price = $_POST['price'];
        $stock = $_POST['stock'];
        $subcategory_id = $_POST['subcategory_id'];
        $added_by = $_POST['admin'];
        $category = $_POST['category_id'];

        if(empty($product_name)||empty($product_description)||empty($unit_price)||empty($stock)||empty($subcategory_id)||empty($added_by)||empty($category)){
            echo "Kindly input details!";
        }else{
            $sql = "INSERT INTO products(product_name, product_description, product_image, price, stock, subcategory, added_by, category) VALUES ('$product_name','$product_description','$folder','$unit_price','$stock','$subcategory_id','$added_by','$category')";

        if(mysqli_query($conn, $sql)){
            if(move_uploaded_file($temp_name, $folder)){
                echo "<h3> Product added succesfully!</h3>";
            }else {
                echo "<h3>Failed to add product!</h3>";
            }
        }else{
            echo "Error: Product not added".mysqli_error($conn);
        }

        }


    }


?>