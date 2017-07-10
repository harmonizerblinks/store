<?php
	ob_start();
	session_start();

if(empty($_SESSION['inventoryUserEmail']) || !isset($_SESSION['inventoryUserEmail'])){

			header("location: index.php");
	}


	if (isset($_POST['submit'])) {

		//$conn = new mysqli("localhost", "root","", "inventory");
		include 'connect.php';

		$item_id = $_POST['item_id'];
		$items_name = $_POST['items_name'];
		$purchase = $_POST['purchase'];
		$price = $_POST['sales_price'];
		$cat_name = $_POST['categoryname'];
		$date = date('Y-m-d');
		$time = date('h:i:s');
		$user = $_SESSION['inventoryUserFullname'];

    $gain = ($_POST['sales_price'] - $_POST['purchase']);


		$sql = "INSERT INTO `items`( `item_id`, `items_name`, `price`, `purchase_price`, `gain`,`cat_name`, `date`, `time`, `user`) VALUES ('$item_id', '$items_name', '$price', '$purchase', '$gain','$cat_name', '$date', '$time', '$user') ";


		if ($conn->query($sql) == TRUE) {
			header("location: ../new-item.php?msg=Item Added Sucessfully");
		}else{
			header("location: ../new-item.php?msg=Unable to Add Item".$conn->error);
		}

	}else{
		header("location: ../dashboard.php");
	}
?>
