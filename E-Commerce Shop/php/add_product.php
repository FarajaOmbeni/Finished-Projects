<?php
    include("process_login.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>Add Product</title>
        <link rel="stylesheet" href="../css/add_products.css">
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
                <li><a href="add_product.php"><?php echo $_SESSION['email'];?></a></li>
                <li><a href="add_product.php">HOME</a></li>
                <li><a href="seller_products.php">MY PRODUCTS</a></li>
                <li><a href="login.php">LOG OUT</a></li>
            </ul>
        </div>
    </section>

    <section class="clothes">
        <div class="shopping">
            <h1>ADD PRODUCT</h1>
        </div>
        </div>
    </section>

    <div class="form">
        <section class="addcat">
            <form method="post" action="process_product.php" enctype="multipart/form-data">
                <label for="pro_name">Name: </label>
                <input type="text" class="input" id="pro_name" name="product_name" required><br><br>
                <label for="pro_desc">Description: </label><br>
                <textarea name="product_description" class="input" id="pro_desc" cols="30" rows="5" required></textarea><br><br>
                <label for="img">Image: </label>
                <input type="file" name="product_image" id="img" required><br><br>
                <label for="price">Price: </label>
                <input type="number" class="input" name="price" id="price" required><br><br>
                <label for="stock">Stock: </label>
                <input type="number" class="input" name="stock" id="stock" required><br><br>
                <label for="category_id">Category: </label>
                <select name="category_id" class="input" id="category_id" required>
                    <?php
                    require_once("connect.php");
                    $sql = "SELECT * FROM categories";
                    $result = mysqli_query($conn, $sql); 

                    while ($category = mysqli_fetch_array(
                    $result,MYSQLI_ASSOC)):; 
                    ?>
                    <option value="<?php echo $category["category_id"];?>"><?php echo $category["category_name"];  ?>
                    </option> <?php endwhile; ?>
                </select><br><br>
                <label for="subcat_id">Subcategory ID: </label>
                <select name="subcategory_id"class="input" id="subcategory_id">
                    <?php
                    require_once("connect.php");
                    $sql = "SELECT * FROM subcategories";
                    $result = mysqli_query($conn, $sql); 

                    while ($subcategory = mysqli_fetch_array(
                    $result,MYSQLI_ASSOC)):; 
                    ?>
                    <option value="<?php echo $subcategory["subcategory_id"];?>"><?php echo $subcategory["subcategory_name"];  ?>
                    </option> <?php endwhile; ?>
                </select><br><br>
                <label for="admin">Added By: </label>
                <select name="admin" class="input" id="admin" required>
                    <?php
                    require_once("connect.php");
                    $sql = "SELECT * FROM seller";
                    $result = mysqli_query($conn, $sql); 

                    while ($users = mysqli_fetch_array(
                    $result,MYSQLI_ASSOC)):; 
                    ?>
                    <option value="<?php echo $users["user_id"];?>"><?php echo $users["first_name"]; echo " "; echo $users["last_name"];  ?>
                    </option> <?php endwhile; ?>
                </select><br><br>
                <input type="submit" value="ADD" name="upload" class="btn">
 
            </form>
        </section>
    </div>

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
                    <li><a href="">About us</a></li>
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
