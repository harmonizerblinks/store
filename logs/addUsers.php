<?php 
	ob_start();
	session_start();  

if(empty($_SESSION['inventoryUserEmail']) || !isset($_SESSION['inventoryUserEmail'])){

			header("location: index.php");
	}


	if (isset($_POST['submit'])) {

		//$conn = new mysqli("localhost", "root","", "inventory");
		include 'connect.php';

		$employid = $_POST['employeeid'];
		$fullName = $_POST['fullName'];
		$pass =  $_POST['pass'];
		$conPass =  $_POST['conPass'];
		$username =  $_POST['username'];
		$priv =  $_POST['priv'];

		$id = "BZV/".date('his');

		$verify = $conn->query("SELECT * FROM users WHERE employee_id = '$employid' ");

		if ($verify->num_rows > 0) {

		if ($priv != 0) {
			if ($conPass === $pass) {
				$sql = "INSERT INTO users (id, employee_id, emails, password, privilege, full_name) 
				VALUES(null, $employid, '$username', '$pass', '$priv', '$fullName') ";
				

				if ($conn->query($sql) == TRUE) {
					header("location: ../new-users.php?msg=User Added Sucessfully");
				}else{
					header("location: ../new-users.php?msg=Unable to Add User".$conn->error);
				}
			  }else{
				  header("location: ../new-users.php?msg=Password Do not match");
			  }
			}else{
				header("location: ../new-users.php?msg=Wrong privilege Selected");
			}
		}else{
			header("location: ../new-users.php?msg=Worng EmployeeId, Enter a valid Employeeid");
		}
			
	}else{
		header("location: dashboard.php");
	}
?>