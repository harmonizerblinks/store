<?php
	//$conn = new mysqli("localhost", "root", "", 'store');
include 'connect.php';

	if ($conn->connect_error) {
		die("Unable to connect to Database Server".$con->connect_error);
	}

	if(isset($_POST['submit'])){

		$username = $_POST['email'];
		$password = $_POST['password'];

		$verify = $conn->query("SELECT * FROM users WHERE emails = '$username' AND password = '$password'");

		if ($verify->num_rows > 0) {

			ob_start();
			session_start();
			$user = $verify->fetch_assoc();
			$_SESSION['inventoryprivilege'] = $user['privilege'];
			$_SESSION['inventoryUserEmail'] = $_POST['email'];
			$_SESSION['inventoryUserFullname'] = $user['full_name'];
			$conn->close();
			header("Location: ../dashboard.php");
		}else{
			header("Location: index.php?msg=Wrong Username or Password");
			$conn->close();

		}

	}
?>
