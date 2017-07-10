<?php
session_start();
if(!empty($_SESSION['nsaUserEmail']) || !isset($_SESSION['nsaUserEmail'])){

		unset($_SESSION['nsaUserEmail']);
		session_destroy();
		header("location: index.php");

	}else
	{
		header("location: ../index.php");
	}
?>
