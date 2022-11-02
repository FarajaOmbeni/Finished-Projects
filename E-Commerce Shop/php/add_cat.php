<?php
    include("process_login.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>Add Category</title>
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
            <li><a href="add_cat.php"><?php echo $_SESSION['email'];?></a></li>
                <li><a href="view_feedback.php">USER FEEDBACK</a></li>
                <li><a href="view.php">SELLERS</a></li>
                <li><a href="view_customers.php">CUSTOMERS</a></li>
                <li><a href="view_products.php">PRODUCTS</a></li>
                <li><a href="add_product.php">ADD PRODUCT</a></li>
                <li><a href="login.php">LOG OUT</a></li>

                <li><a href="login.php">LOG OUT</a></li>
            </ul>
        </div>
    </section>

    <section class="clothes">
        <div class="shopping">
            <h1>ADD CATEGORIES</h1>
        </div>
        </div>
    </section>

    <div class="form">
        <section class="addcat">
            <form action="process_add_cat.php" method="POST">
                <label for="catname">Category Name</label>
                <input class="catname" type="text" id="catname" name="category_name" required><br><br>
                <input class="btn" type="submit" value="ADD" name="submit"> <br><br>             
            </form>
            <a href="add_subcat.php"><input class="btn" type="submit" value="ADD SUBCATEGORY" name="subcat"></a>
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
