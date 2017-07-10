<?php 
	ob_start();
	session_start();  

	if(empty($_SESSION['inventoryUserEmail']) || !isset($_SESSION['inventoryUserEmail'])){

			header("location: index.php");
	}


	if (isset($_POST['submit'])) {

		//$conn = new mysqli("localhost", "root","", "inventory");
		include 'connect.php';


		$fullName = $_POST['fullName'];
		$phone =  $_POST['phone'];
		$gender =  $_POST['gender'];
		$email =  $_POST['email'];
		$dob =  $_POST['dob'];
		$salary =  $_POST['salary'];
		$position =  $_POST['position'];
		$resident = $_POST['resident'];
		$id = "EMP/".date('his');
		$date = date('y-m-d');

		$pix = $_FILES["pix"]["name"];

		move_uploaded_file($_FILES['pix']['tmp_name'], '../images/'.$pix);

		$sql = "INSERT INTO `employees`(`full_name`, `date_of_birth`, `phone`, `email`, `gender`, `position`, `resident`, `pix`, `employee_id`, `salary`, `date`) VALUES('$fullName', '$dob', '$phone', '$email', '$gender', '$position', '$resident', '$pix', '$id', '$salary','$date') ";
		

		if ($conn->query($sql) == TRUE) {
			header("location: ../new-employee.php?msg=Employee Added Sucessfully");
		}else{
			header("location: ../new-employee.php?msg=Unable to Add employee".$conn->error);
		}
		
	}else{
		header("location: ../dashboard.php");
	}
?>