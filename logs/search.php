<?php 
	ob_start();
	session_start();  

	if(empty($_SESSION['inventoryUserEmail']) || !isset($_SESSION['inventoryUserEmail'])){

			header("location: index.php");
	}


	if (isset($_POST['search'])) {

		$c = 1; 
		$conn = new mysqli("localhost", "root", "", "inventory");

		$Name = $_POST['search'];

			echo'<fieldset>
						<legend>Result Found</legend>';

			$members = $conn->query("SELECT * FROM members where member_id ='%$Name%' or full_name='%$Name%'");

		while ($member = $members->fetch_assoc()) {
		
		echo'

						<div style="width: 60%; margin: 0px auto;">
							
						<div class="form-group">
					    <label class="control-label col-sm-4" for="image">Member Passport:</label>

					    <div class="col-sm-8">
					      <img src="images/'.$member['pix'].'" width="100" height="100" />
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-4" for="fullName">Full Name:</label>
					    <div class="col-sm-8">
					      <label>' .$member['full_name'].' </label>
					    </div>
					  </div>


					  <div class="form-group">
					    <label class="control-label col-sm-4" for="calendar">Date of Birth</label>
					    <div class="col-sm-8"> 
					      <label>' .$member['date_of_birth'].' </label>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-4" for="phone">Phone Number:</label>
					    <div class="col-sm-8"> 
					      <label>' .$member['phone'].' </label>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-4" for="State">Gender:</label>
					    <div class="col-sm-8"> 
					      <label>' .$member['gender'].' </label>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-4" for="email">Email:</label>
					    <div class="col-sm-8"> 
					      <label>' .$member['email'].' </label>
					    </div>
					  </div>


					  <div class="form-group">
					    <label class="control-label col-sm-4" for="State">Department:</label>
					    <div class="col-sm-8"> 
					      <label>' .$member['department'].' </label>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-4" for="State">Position:</label>
					    <div class="col-sm-8"> 
					      <input type="text" name="position" class="form-control" id="position" placeholder="Member, Pastor, Bishop, Deacon etc" required />
					    </div>
					  </div>

					  <div class="form-group">
					 	 <label for="resident" class="control-label col-sm-4">Residential Address:</label>
					 	 <div class="col-sm-8"> 
					  		<textarea name="resident" class="form-control" rows="5" id="resident" placeholder="Enter Your Current Residential Address" required /></textarea>
					  	</div> 
					</div>
					<br /><br />
					<div class="form-group"> 
				    <div class="col-sm-offset-4 col-sm-8">
				      <button type="submit" name="submit" class="btn btn-success">ADD Members</button>
				    </div>
				  </div>
						</div>

					</fieldset>'

		if ($conn->query($sql) == TRUE) {
			header("location: ../new-members.php?msg=Members Added Sucessfully");
		}else{
			header("location: ../new-members.php?msg=Unable to Add members".$conn->error);
		}
		
	}else{
		header("location: dashboard.php");
	}
?>

<?php


	if (isset($_POST['search'])) {

		$c = 1; 
		$conn = new mysqli("localhost", "root", "", "inventory");

		$word = $_POST['world'];

			$members = $conn->query("SELECT * FROM members where member_id = '$word' ");

			echo'<fieldset>
						<legend>Result Found</legend>';

		while ($member = $members->fetch_assoc()) {
			
			$fullName = $member['fullName'];
			$phone =  $member['phone'];
			$gender =  $member['gender'];
			$email =  $member['email'];
			$dob =  $member['dob'];
			$position =  $member['position'];
			$department =  $member['department'];
			$resident = $member['resident'];
			$img = $member['pix'];
		
		echo"

						<div style='width: 60%; margin: 0px auto;'>
							
						<div class='form-group'>
					    <label class='control-label col-sm-4' for='image'>Member Passport:</label>

					    <div class='col-sm-8'>
					      <img src='images/$img' width='100' height='100' />
					    </div>
					  </div>

					  <div class='form-group'>
					    <label class='control-label col-sm-4' for='fullName'>Full Name:</label>
					    <div class='col-sm-8'>
					      <label>$fullName </label>
					    </div>
					  </div>


					  <div class='form-group'>
					    <label class='control-label col-sm-4' for='calendar'>Date of Birth</label>
					    <div class='col-sm-8'> 
					      <label> $dob </label>
					    </div>
					  </div>

					  <div class='form-group'>
					    <label class='control-label col-sm-4' for='phone'>Phone Number:</label>
					    <div class='col-sm-8'> 
					      <label> $phone </label>
					    </div>
					  </div>

					  <div class='form-group'>
					    <label class='control-label col-sm-4' for='State'>Gender:</label>
					    <div class='col-sm-8'> 
					      <label>" .$member['gender']." </label>
					    </div>
					  </div>

					  <div class='form-group'>
					    <label class='control-label col-sm-4' for='email'>Email:</label>
					    <div class='col-sm-8'> 
					      <label>" .$member['email']." </label>
					    </div>
					  </div>

					  <div class='form-group'>
					    <label class='control-label col-sm-4' for='State'>Department:</label>
					    <div class='col-sm-8'> 
					      <label>" .$member['department']." </label>
					    </div>
					  </div>

					  <div class='form-group'>
					    <label class='control-label col-sm-4' for='State'>Position:</label>
					    <div class='col-sm-8'> 
					      <label>" .$member['position']." </label>
					    </div>
					  </div>

					  <div class='form-group'>
					 	 <label for='resident' class='control-label col-sm-4'>Residential Address:</label>
					 	 <div class='col-sm-8'> 
					  		<label>" .$member['resident']." </label>
					  	</div> 
					</div>";
					echo'

					<br /><br />
					<div class="form-group"> 
				    <div class="col-sm-offset-4 col-sm-8">
				      <button type="submit" name="update" class="btn btn-success">Update</button>
				    </div>
				    <td><a href="logs/delete.php?id='.$member['member_id'].'" style="color: red">Delete</a></td>
				  </div>
						</div>
					</fieldset>';
				}
				if ($members != TRUE){

			header("location: search-members.php?msg=Record not Found");
		}
}

?>
