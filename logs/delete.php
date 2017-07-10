<?php
	ob_start();
	session_start();

	if($_SESSION['inventoryprivilege'] != 1){

			header("location: ../dashboard.php");
	}else{

	include 'connect.php';

	if (isset($_GET['id'])) {

		$id = $_GET['id'];
		//$conn = new mysqli("localhost", "root", "", "inventory");

		$sql = "DELETE FROM employees where employee_id = '$id' ";

		if ($conn->query($sql) == TRUE) {
			header("location: ../view-employee.php?msg=employee Deleted Successfully");
		}else{
			header("location: ../view-employee.php?msg=Unable to Delete employee");
		}


	} elseif (isset($_GET['id1'])) {

		$id1 = $_GET['id1'];
		//$conn = new mysqli("localhost", "root", "", "inventory");

		$sql = "DELETE FROM items where item_id = '$id1' ";

		if ($conn->query($sql) == TRUE) {
			header("location: ../view-item.php?msg=item Deleted Successfully");
		}else{
			header("location: ../view-item.php?msg=Unable to Delete item");
		}


	} elseif (isset($_GET['id2'])) {

		$id2 = $_GET['id2'];
		//$conn = new mysqli("localhost", "root", "", "inventory");

		$sql = "DELETE FROM stock where stock_id = '$id2' ";

		if ($conn->query($sql) == TRUE) {
			header("location: ../view-stock.php?msg=stock Deleted Successfully");
		}else{
			header("location: ../view-stock.php?msg=Unable to Delete stock");
		}

	} elseif (isset($_GET['id3'])) {

		$id3 = $_GET['id3'];
		//$conn = new mysqli("localhost", "root", "", "inventory");

		$sql = "DELETE FROM supply where supply_id = '$id3' ";

		if ($conn->query($sql) == TRUE) {
			header("location: ../view-supply.php?msg=supply Deleted Successfully");
		}else{
			header("location: ../view-supply.php?msg=Unable to Delete supply");
		}

	} elseif (isset($_GET['id4'])) {

		$id4 = $_GET['id4'];
		//$conn = new mysqli("localhost", "root", "", "inventory");

		$sql = "DELETE FROM users where employee_id = '$id4' ";

		if ($conn->query($sql) == TRUE) {
			header("location: ../view-users.php?msg=supply Deleted Successfully");
		}else{
			header("location: ../view-users.php?msg=Unable to Delete supply");
		}


	}
	elseif (isset($_GET['id5'])) {

		$id5 = $_GET['id5'];
		//$conn = new mysqli("localhost", "root", "", "inventory");

		$sql = "DELETE FROM category where cat_id = '$id5' ";

		if ($conn->query($sql) == TRUE) {
			header("location: ../category.php?msg=Category deleted successfully");
		}else{
			header("location: ../category.php?msg=Unable to delete this category");
		}


	}else{
		header("location: ../index.php");
	}
}


?>
