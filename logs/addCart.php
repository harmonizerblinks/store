<?php

if(empty($_GET['id']) || !isset($_GET['id']) ){
	if(isset($_GET['new'])){
		unset($_SESSION['sales']);
		unset($_SESSION['cartCont']);
		unset($_SESSION['sales']);
		unset($_SESSION['total']);
		unset($_SESSION['quantities']);
		session_unset();
		session_destroy();
		header("location: ../new-sales.php");
		//session_destroy();
	}
}else{
	include 'connect.php';
	if($_GET['id'] != $_SESSION['cartid']){
			$id = addslashes($_GET['id']);
			$prod = $conn->query("SELECT * from sales where sales_id  = '$id' ");
			$product = $prod->fetch_assoc();

			$_SESSION['cartid'] = 0;

			$_SESSION['cartCont'] +=1;

			$_SESSION['cartid'] = $id;

			$it = $product['sales_id'];

			$items = $_SESSION['cartCont'];

			$_SESSION['sales'][$it] = array();

			$_SESSION['sales'][$it] = $product;

		}
}

?>
