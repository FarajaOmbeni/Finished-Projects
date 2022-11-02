<?php 
require("connect.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$dob = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$role = $_POST['role'];

if(isset($_POST['register'])){
	if(empty($first_name)||empty($last_name)||empty($email)||empty($password)||empty($phone_number)||empty($dob)||empty($gender)){
		echo "Kindly input details!";
	}else{
		if($role==1){
			$sql = "INSERT INTO `admin`(first_name, last_name, email, `password`, phone_number, gender, dob, `role_id`)  VALUES ('$first_name','$last_name', '$email','$password','$phone_number', '$gender', '$dob','$role')";
		} else if($role==2){
			$sql = "INSERT INTO `customer`(first_name, last_name, email, `password`, phone_number, gender, dob, `role_id`)  VALUES ('$first_name','$last_name', '$email','$password','$phone_number', '$gender', '$dob','$role')";
		}else if($role==3){
			$sql = "INSERT INTO `seller`(first_name, last_name, email, `password`, phone_number, gender, dob, `role_id`)  VALUES ('$first_name','$last_name', '$email','$password','$phone_number', '$gender', '$dob','$role')";
		}
	
	if (mysqli_query($conn,$sql)) {
		echo "<h3 style=color: yellow, text-align:center;>Regristration Succesfull!</h3> <a href='login.php'>LOG IN</a>";
	}else{echo "Error: Record not added".mysqli_error($conn);}
	
	
	}
}
?>
