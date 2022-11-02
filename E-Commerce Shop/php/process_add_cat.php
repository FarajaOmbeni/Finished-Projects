<?php 
require("connect.php");


$catname = $_POST['category_name'];

if(isset($_POST['submit'])){
	if(empty($catname)){
		echo "Kindly input category name!";
	}else{
		$sql = "INSERT INTO categories( category_name)  VALUES ('$catname')";

		if (mysqli_query($conn,$sql)) {
			echo "New Record inserted successfully";
		}else{echo "Error: Record not added".mysqli_error($conn);}
	}
}

?>