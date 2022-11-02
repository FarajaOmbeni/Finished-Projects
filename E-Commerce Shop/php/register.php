<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>Register</title>
        <link rel="stylesheet" href="../css/register.css">
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
                <li><a href="../html/home.html">HOME</a></li>
                <li><a href="../html/login.html">LOG IN</a></li>
                <li><a href="../html/about.html">ABOUT US</a></li>
                <li><a href="../html/search.html">SEARCH</a></li>
                <li><a href="../html/cart.hmtl">CART</a></li>
            </ul>
        </div>
    </section>

    <section class="clothes">
        <div class="shopping">
            <h1>REGISTER</h1>
        </div>
        </div>
    </section>

    <div class="form">
    <form class="registration-form" action="process_register.php" method="post">
                <section class="registration">
                            
                              
                               
                                    <label for="fname">First Name: </label>
                                    <input class="input" type="text" id="fname" name="first_name">
                                <br><br>
                                
                                    <label for="lname">Last Name: </label>
                                    <input class="input" type="text" id="fname" name="last_name">
                                <br><br>
                               
                                    <label for="phone">Phone Number</label>
                                    <input class="input" type="text" id="phone" name="phone_number"></li>
                                <br><br>
                               
                                    <label for="DoB">Date of Birth: </label>
                                    <input class="input" type="date" id="DoB" name="date_of_birth">
                                <br><br>
                                
                                    <label for="email">Email: </label>
                                    <input class="input" type="text" id="email" name="email">
                                <br><br>
                           
                                <label for="password">Password: </label>
                                <input class="input" type="password" id="password" name="password" ><br><br>
                                <br><br>
                                <label for="gender">Gender: </label>
                                <input class="gender" type="radio" id="gender" name="gender" value="M">Male
                                <input type="radio" id="gender" name="gender" value="F">Female
                                 <br><br>
                            <label for="role">Role</label>
                            <select name="role" id="role" class="input">
                                <?php
                                require_once("connect.php");
                                $sql = "SELECT * FROM roles ";
                                $result = mysqli_query($conn, $sql); 

                                while ($role = mysqli_fetch_array(
                                $result,MYSQLI_ASSOC)):; 
                                ?>
                                <option value="<?php echo $role["role_id"];?>"><?php echo $role["role_name"];  ?>
                                </option> <?php endwhile; ?>
                            </select><br><br>
                            <input class="btn-reg" type="submit" value="REGISTER" name="register"><br><br>
                            <p>Already have an account? <a href="login.php"><input type="button" value="LOG IN" class="btn-log"></a></p>
                            
                            
                           
                </section>
        </form>
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
