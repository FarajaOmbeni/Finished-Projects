<?php 
require("connect.php");

$subcatname = $_POST['subcategory_name'];
$catid = $_POST['category_id'];

if(isset($_POST['submit'])){
	if(empty($subcatname)||empty($catid)){
		echo "Kindly input details!";
	}else{
		$sql = "INSERT INTO subcategories(subcategory_name, category) VALUES('$subcatname', '$catid')";

		if (mysqli_query($conn,$sql)) {
			echo "New Record inserted successfully";
		}else{echo "Error: Record not added".mysqli_error($conn);}
	}
}

?>