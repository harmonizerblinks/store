<?php
	ob_start();
	session_start();

	if(empty($_SESSION['inventoryUserEmail']) || !isset($_SESSION['inventoryUserEmail'])){

			header("location: index.php");
	}
?>
<?php
include 'includes/nav.php';
?>
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Add New Employee</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">New Employee Registeration Form</h4>
                <h6 class="card-subtitle">Fill all the details of the employee.</h6>
                 <form class="form p-t-20" action="logs/addemployee.php" role="form" enctype="multipart/form-data">
                    <?php
                        if (isset($_GET['msg'])) {
                            echo '
                                        <div class="alert alert-sucess">
                                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <center>
                                                <strong>'. $_GET['msg'].'</strong>
                                             </center>
                                         </div>
                                         ';
                        }?>
                    <div class="form-group">
                        <label for="sales_id">Passport</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-image"></i></div>
                            <input type="file" class="form-control" name="pix" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                            <input type="text" class="form-control" name="fullName" placeholder="Employee Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email </label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-email"></i></div>
                            <input type="text" class="form-control" name="email" placeholder="Employee Email Address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="icon-phone"></i></div>
                            <input type="text" class="form-control" name="phone" placeholder="Phone number" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="icon-location-pin"></i></div>
                            <input type="text" class="form-control" name="position" placeholder="Position" required>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
          <div class="card-block">
              <h4 class="card-title">Employee Form</h4>
              <h6 class="card-subtitle">Fill the details of the employee.</h6>
                   <div class="form-group">
                        <label for="salary">Salary</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-currency-eur"></i></div>
                            <input type="number" class="form-control" name="salary" placeholder="Enter Amount to be paid to Employee" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Date Of Birth</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-calendar"></i></div>
                            <input type="text" class="form-control" name="dob" placeholder="Date of birth" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <div class="input-group">
                            <textarea rows="8" class="form-control" name="resident" placeholder="House Address" required></textarea>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success btn-lg waves-effect waves-light m-r-10">Add Employee</button>
                </form>
          </div>
      </div>
    </div>
  </div>
<?php
include 'includes/footer.php';
?>
