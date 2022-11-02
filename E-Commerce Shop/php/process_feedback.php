<?php
require("connect.php");

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];



if(isset($_POST['feedback_btn'])){
    if(empty($name)||empty($email)||empty($feedback)){
        echo "<h3>KINDLY INPUT DETAILS!</h3>";
    } else {
        $sql = "INSERT INTO feedback(`name`, email, feedback) VALUES ('$name','$email','$feedback')";      
    }
    if (mysqli_query($conn,$sql)) {
		echo "<h3 style=color: yellow, text-align:center;>FEEDBACK SENT SUCCESFULLY!</h3> <a href='home.php'>HOME</a>";
	}else{echo "Error: FEEDBACK NOT SENT!".mysqli_error($conn);}
}

?>