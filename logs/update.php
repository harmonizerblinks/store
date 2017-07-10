<?php
	/*ob_start();
	session_start();  

	if(empty($_SESSION['inventoryUserquantity']) || !isset($_SESSION['inventoryUserquantity'])){
utdown
			header("location: index.php");
	}*/

	if(isset($_GET['quantity'])){
		//$conn = new mysqli("localhost", "root","", "inventory");
		include 'connect.php';	
		/*$quantity = $_GET['quantity'];
		$amount = $_GET['amount'];
		$crate_quantity = $_GET['crate_quantity'];*/
		$item = $_GET['item'];
		$page = $_GET['page'];
		$pageid = $_GET['id'];

		$current = $conn->query("SELECT * FROM stock where items_name='$item'");	
    		$rows = $current->fetch_assoc();
    		$id = $rows['id'];

    		// get the values and calculate for the current stock
    		if($page === "stock"){
    		$quant = ($_GET['quantity'] + $rows['quantity']);
    		$gain = ($_GET['gain'] + $rows['gain']);
    		$amt = ($_GET['amount'] + $rows['amount']);
    		
    		}else{
   			$quant = ($rows['quantity'] - $_GET['quantity']);
    		$gain = ($rows['gain'] - $_GET['gain']);
    		$amt = ($rows['amount'] - $_GET['amount']);
    		
    		}/*
    		echo "$quant, $crate_quant, $amt";
    		echo "".$rows['quantity']." ".$rows['crate_quantity']."";
    		*/
    		//update stock of item to be sold

			$sql = $conn->query("UPDATE `stock` SET `quantity`='$quant',`gain`='$gain',`amount`='$amt' WHERE id='$id'");
			//$update = "UPDATE stock SET `quantity`=\'$quant\',`crate_quantity`=\'$crate_quant\',`amount`=\'$amt\' WHERE id=\'$id\'";
			
    		if ($sql == TRUE) {
				header("location: ../new-$page.php?id=$pageid&msg=$page Added Sucessfully");
    		}else{
			header("location: ../new-$page.php?msg=Unable to Added $page".$conn->error);
			}
			
	}	else{
		header("location: index.php");
	}
?>