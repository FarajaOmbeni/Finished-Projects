<?php
    include("process_login.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>Edit User</title>
        <link rel="stylesheet" href="../css/editproduct.css">
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
                    <li><a href="add_cat.php">HOME</a></li>
                    <li><a href="view_products.php">PRODUCTS</a></li>
                    <li><a href="view_sellers.php">SELLERS</a></li>
                    <li><a href="view_customers.php">CUSTOMERS</a></li>
                    <li><a href="login.php">LOG OUT</a></li>
            </ul>
        </div>
    </section>

    <section class="clothes">
        <div class="shopping">
            <h1>EDIT USER</h1>
        </div>
        </div>
       
                                
                                    
            </section>
            <form class="search-form" action="" method="get">
                <section class="registration">
                            <ul>
                                <br><br>
                             
                                    <label for="user_id">User</label>
                                    <input type="text" class="input" name="user_id" value="<?php if(isset($_GET["user_id"])){echo $_GET["user_id"];}  ?>">
                                    <input type="submit" class="btn" value="SEARCH" name="search">
                                    
                                       
                </section>
        </form>
   
            <hr>
            <?php 
            require("connect.php");

                if(isset($_GET['user_id'])){
                    $user_id = $_GET['user_id'];
                    $sql = "select * from customer where user_id='$user_id'";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        foreach($result as $row){

                    ?>
                    <form action="" method="POST" class="form">
                   
                            <label for="fname">First Name</label>
                            <input type="text" class="input" value="<?php echo $row['first_name']; ?>" name="first_name">
                       <br><br>
                       
                            <label for="lname">Last Name</label>
                            <input type="text" class="input"  value="<?php echo $row['last_name']; ?>" name="last_name">
                     <br><br>
                        
                            <label for="email">Email</label>
                            <input type="text" class="input" value="<?php echo $row['email']; ?>" name="email">
                        <br><br>
                        
                            <label for="password">Password</label>
                            <input type="text" class="input" value="<?php echo $row['password']; ?>" name="password">
                       <br><br>
                       
                            <label for="tel">Phone Number</label>
                            <input type="text" class="input" value="<?php echo $row['phone_number']; ?>" name="phone_number">
                      <br><br>
                       
                            <input type="submit" class="btn"  value="UPDATE" name="update">
                            <?php
                                if(isset($_POST['update'])){
                                    $user_id = $_GET['user_id'];
                                    $sql = "UPDATE `customer` SET first_name='$_POST[first_name]', last_name='$_POST[last_name]', email='$_POST[email]',`password`='$_POST[password]',phone_number='$_POST[phone_number]' WHERE `user_id`='$user_id'";
                                    $execute = mysqli_query($conn, $sql);
                                    
                                    if($execute){
                                        echo "<h5 style=color:black;>Records updated Succesfully!</h5>";
                                    } else {echo "<h5 style=color:red;>Records not updated</h5>";}
                                }
                            ?>
                      <br><br>
                  
                    <?php
              }
                    } else{ echo "<h3 style=color:red;text-align:center;>No users found!</h3>";}
                }
                
                
            ?>
        </form>

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
