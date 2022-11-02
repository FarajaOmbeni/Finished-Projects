<?php
    include("process_login.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>Cart</title>
        <link rel="stylesheet" href="../css/categories.css">
        <link rel="stylesheet" href="../css/add_cat.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;400;700&display=swap" rel="stylesheet">
    </head>
<body>
    <section class="header">
        <div class="shoplogo">
            <a href="home.php"><img src="../images/logo4.PNG"></a>
        </div>
        <div class="navlinks">
            <ul>
            <li><a href="user_login.php"><?php echo $_SESSION['email'];?></a></li>
            <li><a href="user_login.php">HOME</a></li>
                        <li><a href="view_products.php">PRODUCTS</a></li>
                        <li><a href="about.html">ABOUT US</a></li>
                        <li><a href="cart.php">CART</a></li>
                        <li><a href="login.php">LOG OUT</a></li>
            </ul>
        </div>
    </section>

    <section class="clothes">
        <div class="shopping">
            <h1>SHOPPING CART</h1>
        </div>
        </div>
    </section>

    <table class="table" style="width: 100%;">

    <?php
        $sql = "SELECT * from cart";
        $result = mysqli_query($conn, $sql);
        $test = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

    <tbody>
        <?php
            foreach ($test as $key => $value){
        ?>
        <tr>
            <td><?php echo "<img src='".$value['product_image']."' style='width:100px; height: 100px;'>"; ?></td>
            <td><?php echo $value["product_name"] ?></td>
            <td><?php  echo $value["price"] ?></td>
            <input type="hidden" value="<?php $total += $value['price']; ?>">
            <input type="hidden" name="product_id" value="<?php $value['product_id']; ?>">
            <input type="hidden" name="product_name" value="<?php $value['product_name'] ?>">
            <input type="hidden" name="price" value="<?php $value['price'] ?>">
        </tr>
        <?php }
        ?>
    </tbody>
    <label for="total">Total: </label>
    <input type="number" value="<?php echo $total  ?>">
    <form action="cart.php" method="post">
        <td><input type="submit" value="CHECKOUT" name="checkout"></td>
        <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
        <input type="hidden" name="product_name" value="<?php echo $value['product_name'] ?>">
        <input type="hidden" name="price" value="<?php echo $value['price'] ?>">
        <?php
            if(isset($_POST['checkout'])){
                $sql = "SELECT * from customer";
                $result = mysqli_query($conn, $sql);
                $test = mysqli_fetch_all($result, MYSQLI_ASSOC);
                foreach ($test as $key => $value);
                

                $customer =   $_SESSION['email'];
                $id = $_POST['product_id'];
                $name = $_POST['product_name'];
                $price = $_POST['price'];


                $insert = "insert into orders(customer_id, product_id, product_name, price) values('$customer', '$id', '$name', '$price')";
                $result = mysqli_query($conn, $insert);
                if($result){
                    echo "Thank you for shopping with us!";
                } else{
                    echo "Error".mysqli_error($conn);
                }

                $cart = "drop table cart";
                mysqli_query($conn, $cart);

                $create = "CREATE TABLE `faraja`.`cart` ( `product_id` INT(11) NOT NULL , `product_name` VARCHAR(30) NOT NULL , `product_image` VARCHAR(30) NOT NULL , `price` INT(7) NOT NULL, FOREIGN KEY(product_id) REFERENCES products(product_id))";
                mysqli_query($conn, $create);



            }
        ?>
    </form>
</table>
    

    <div class="footer">
        <div class="info">
            <div class="social-links">
                <h3>STAY CONNECTED!</h3>
                <ul>
                    <a href="">FACEBOOK</a>
                    <a href="">TWITTER</a>
                    <a href="">INSTAGRAM</a>
                </ul>  
            </div>
            <div class="quick-links">
                <h3>QUICK LINKS</h3>
                <ul>
                    <li><a href="#linkabout">About us</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms and Conditions</a></li>
                    <li><a href="">Terms of Service</a></li>
                    <li><a href="">Refund Policy</a></li>
                </ul>
            </div>
            <div class="help">
                <h3>NEED HELP?</h3>
                <ul>
                    <li><a href="">Track Order</a></li>
                    <li><a href="">Shipping Information</a></li>
                    <li><a href="">Return an Item</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div class="newsletter">
                <h3>NEWSLETTER</h3>
                <ul>
                    <li><p>Subscribe to our Newsletter <br> to stay updated on new <br> promotions!</p></li><br>
                    <label for="">Email: </label><br>
                    <input type="text" id="email"> <br><br>
                    <input class="btn" type="submit" value="REGISTER"><br>
                </ul>
            </div>
            <div class="feedback">
                <h3>FEEDBACK</h3>
                <form action="process_feedback.php" method="POST">
                    <label for="name">Name</label> <br>
                    <input type="text" id="name" name="name" required><br>
                    <label for="email">Email</label><br>
                    <input type="text" id="email" name="email" required><br>
                    <label for="feedback">Feedback</label> <br>
                    <textarea name="feedback" id="feedback" cols="30" rows="10" required></textarea><br>
                    <input type="submit" class="btn" name="feedback_btn" value="SEND FEEDBACK">
                </form>
            </div>
                        <div class="copyright">
        <h1>THANK YOU FOR SHOPPING WITH US!</h1>
    </div>
        </div>
    </div>

        


        


</body>
</html>
