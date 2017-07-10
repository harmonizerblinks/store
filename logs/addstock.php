<?php 
	ob_start();
	session_start();  

	if(empty($_SESSION['inventoryUserEmail']) || !isset($_SESSION['inventoryUserEmail'])){

			header("location: index.php");
	}


	if (isset($_POST['submit'])) {

		//$conn = new mysqli("localhost", "root","", "inventory");
		include 'connect.php';

		$stock_id = $_POST['stock_id'];
		$items_name = $_POST['items_name'];
		$quantity = $_POST['quantity'];
		$date = date('Y-m-d');
		$time = date('h:i:s:a');
		$user = $_SESSION['inventoryUserFullname'];

		$check = $conn->query("SELECT * FROM items where items_name='$items_name'");
		if ($check->num_rows > 0 ){
			$row = $check->fetch_assoc();    		
    		$amount = ($_POST['quantity'] *$row['price']);
    		$gain = ($_POST['quantity'] *$row['gain']);

    	$current = $conn->query("SELECT * FROM stock where items_name='$items_name'");
    	if ($current->num_rows > 0){
    		//insert into stock record

    		$sql_updates = "INSERT INTO `stock_record`(`stock_id`, `items_name`, `quantity`, `gain`, `amount`, `date`, `time`, `user`) VALUES ('$stock_id', '$items_name', '$quantity','$gain', '$amount', '$date', '$time','$user')";
    		if($conn->query($sql_updates) == true){
    		//transfer record to update stock record 
    		header("location: update.php?page=stock&quantity=$quantity&amount=$amount&gain=$gain&item=$items_name&id=$stock_id");
    		
    		}
    	}else{
    		//insert into stock table if stock not found
		$sql = "INSERT INTO `stock`(`stock_id`, `items_name`, `quantity`, `gain`, `amount`, `date`) VALUES ('$stock_id', '$items_name', '$quantity','$gain', '$amount', '$date') ";

			if ($conn->query($sql) == TRUE) {

				$sql_updates = "INSERT INTO `stock_record`(`stock_id`, `items_name`, `quantity`, `gain`, `amount`, `date`, `time`, `user`) VALUES('$stock_id', '$items_name', '$quantity','$gain', '$amount', '$date', '$time', '$user')";
				if ($conn->query($sql_updates) == TRUE){
				header("location: ../new-stock.php?msg=Stock Added Sucessfully");
				}else{
				header("location: ../new-stock.php?msg=Unable to Add Stock".$conn->error);
				}
			}else{
				header("location: ../new-stock.php?msg=Unable to Add Stock".$conn->error);
			}
		}

	}else{
		header("location: ../new-stock.php?msg=Product Not yet added");
	}

	}else{
		header("location: ../dashboard.php");
	}

?>