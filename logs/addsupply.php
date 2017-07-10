<?php 
	ob_start();
	session_start();  

if(empty($_SESSION['inventoryUserEmail']) || !isset($_SESSION['inventoryUserEmail'])){

			header("location: index.php");
	}


	if (isset($_POST['submit'])) {

		//$conn = new mysqli("localhost", "root","", "inventory");
		include 'connect.php';

		$supply_id = $_POST['supply_id'];
		$cust_phone = $_POST['phone'];
		$cust_name = $_POST['fullName'];
		$items_name = $_POST['items_name'];
		$quantity = $_POST['quantity'];
		$address = $_POST['resident'];
		$date = date('Y-m-d');
		$time = date('h:i:s');

		$check = $conn->query("SELECT * FROM items where items_name='$items_name'");
		if ($check->num_rows > 0 ){
			$row = $check->fetch_assoc();    		
    		$amount = ($_POST['quantity'] *$row['amount']);
    		$gain = ($_POST['quantity'] *$row['gain']);
    		$price = ($row['amount']);
    		$status = 1;

    	$current = $conn->query("SELECT * FROM stock where items_name='$items_name'");
    	if ($current->num_rows > 0 ){
    	$rows = $current->fetch_assoc();
    		// get the values and calculate for the current supply
    		$quant = ($rows['quantity']);
    	if ($quant > $quantity){
    		//update supply record

    		/*$sql_updates = $conn->query("INSERT INTO `supply_updates`(`supply_id`, `items_name`, `quantity`, `crate_quantity`, `amount`, `date`) VALUES ('$supply_id', '$items_name', '$quantity','$crate_quantity', '$amount', '$date') ");
    		header("location: update.php?quantity=$quantity&amount=$amount&crate_quantity=$crate_quantity&");
    	}else{*/
    		//insert into supply table if supply not found
		$sql = "INSERT INTO `supply`(`supply_id`,`cust_name`,`cust_phone`,`items_name`,`price`,`quantity`,`gain`,`total_amount`,`address`,`status`,`date`) VALUES ('$supply_id','$cust_name','$cust_phone','$items_name','$price','$quantity','$gain','$amount','$address','$status','$date','$time') ";		

			if ($conn->query($sql) == TRUE) {
			header("location: update.php?page=supply&quantity=$quantity&amount=$amount&gain=$gain&item=$items_name&");
			}else{
				header("location: ../new-supply.php?msg=Unable to Add Supply".$conn->error);
			}
		}else{
				header("location: ../new-supply.php?msg=Not Enough Quantity in stock".$conn->error);
		}
	}else{
				header("location: ../new-supply.php?msg=Not in stock".$conn->error);
		}

	}else{
		header("location: ../new-supply.php?msg=Product Not yet added");
	}

	}else{
		header("location: dashboard.php");
	}

?>