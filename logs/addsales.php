<?php 
	ob_start();
	session_start();  

	if(empty($_SESSION['inventoryUserEmail']) || !isset($_SESSION['inventoryUserEmail'])){

			header("location: index.php");
	}


	if (isset($_POST['sales_id'])) {

		//$conn = new mysqli("localhost", "root","", "inventory");
		include 'connect.php';

		$sales_id = $_POST['sales_id'];
		$cust_phone = $_POST['phone'];
		$items_name = $_POST['items_name'];
		$quantity = $_POST['quantity'];
		$user = $_SESSION['inventoryUserFullname'];

		$check = $conn->query("SELECT * FROM items where items_name='$items_name'");
		if ($check->num_rows > 0 ){
			$row = $check->fetch_assoc();    		
    		$amount = ($row['price'] * $_POST['quantity']);
    		$gain = ($row['gain'] * $_POST['quantity']);
    		$price = ($row['price']);

    	$current = $conn->query("SELECT * FROM stock where items_name='$items_name'");
    	if ($current->num_rows > 0 ){
    	$rows = $current->fetch_assoc();
    		// get the values and calculate for the current sales
    		$quant = ($rows['quantity']);
    		//check if current stock meet the sales demand
    	if ($quant > $quantity){
    		//insert into sales table if sales not found
		$date = date('Y-m-d');
		$time = date('h:i:s');

		$sql = "INSERT INTO `sales`(`sales_id`, `cust_phone`, `items_name`, `price`, `quantity`, `total_amount`, `gain`, `date`, `time`, `user`) VALUES ('$sales_id','$cust_phone','$items_name','$price','$quantity','$amount','$gain','$date','$time','$user') ";		

			if ($conn->query($sql) == TRUE) {
				header("location: update.php?page=sales&quantity=$quantity&amount=$amount&gain=$gain&item=$items_name&id=$sales_id");
			}else{
				header("location: ../new-sales.php?msg=Unable to Add sales".$conn->error);
			}
		}else{
				header("location: ../new-sales.php?msg=Not Enough Quantity in stock".$conn->error);
		}
	}else{
				header("location: ../new-sales.php?msg=Not in stock".$conn->error);
		}

	}else{
		header("location: ../new-sales.php?msg=Product Not yet added");
	}

	}else{
		header("location: ../dashboard.php");
	}

?>