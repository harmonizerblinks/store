<?php

	if(isset($_GET['id'])){
		$conn = new mysqli("localhost", "root","", "inventory");	
		/*$quantity = $_GET['quantity'];
		$amount = $_GET['amount'];
		$crate_quantity = $_GET['crate_quantity'];*/
		$id = $_GET['id'];
		$status = '0';

			$sql = $conn->query("UPDATE `supply` SET `status`='$status' WHERE supply_id='$id'");
			//$update = "UPDATE stock SET `quantity`=\'$quant\',`crate_quantity`=\'$crate_quant\',`amount`=\'$amt\' WHERE id=\'$id\'";
			
    		if ($sql == TRUE) {
				header("location: ../view-supply.php?msg=$Delivery has been Confirm");
    		}else{
			header("location: ../view-supply.php?msg=Unable to comfirm delivery".$conn->error);
			}
			
	}	else{
		header("location: index.php");
	}
?>