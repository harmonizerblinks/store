<?php
	ob_start();
	session_start();

if(empty($_SESSION['inventoryUserEmail']) || !isset($_SESSION['inventoryUserEmail'])){

			header("location: index.php");
	}


	if (isset($_POST['submit'])) {

		//$conn = new mysqli("localhost", "root","", "inventory");
		include 'connect.php';

		$cat_id = $_POST['categoryid'];
		$cat_name = $_POST['categoryname'];


		$sql = "INSERT INTO `category`( `cat_id`, `cat_name`) VALUES ('$cat_id', '$cat_name') ";


		if ($conn->query($sql) == TRUE) {
			header("location: ../category.php?msg=Category Added Sucessfully");
		}else{
			header("location: ../category.php?msg=Unable to Add Catgory".$conn->error);
		}

	}else{
		header("location: ../dashboard.php");
	}
?>
