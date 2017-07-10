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
                <h4 class="card-title">New Employee Form</h4>
                <h6 class="card-subtitle">Fill the details of the item sold here.</h6>
                <form class="form p-t-20">
                    <div class="form-group">
                        <label for="sales_id">Passport</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
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
                        <label for="quantity">Date Of Birth</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-calendar"></i></div>
                            <input type="date" class="form-control mydatepicker" name="dob" placeholder="Date of birth" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pwd2">Amount Paid</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                            <input type="number" class="form-control" name="amountpaid" placeholder="Amout paid">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg waves-effect waves-light m-r-10">Add</button>
                    <button type="submit" class="btn btn-inverse btn-lg waves-effect waves-light">New</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
          <div class="card-block">
              <h4 class="card-title">Print out Report<h4>
              <h6 class="card-subtitle">Item details to be print out</h6>
              <div class="table-responsive">
                  <table class="table table-hover">
                      <thead>
                          <tr>
                              <th>S/N</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Qty</th>
                              <th>Total</th>
                              <th>Paid</th>
                              <th>Balance</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>1</td>
                            <td>Iphone</td>
                            <td>2500</td>
                            <td>12</td>
                            <td>30000</td>
                            <td>20</td>
                            <td>29980</td>
                            <td><a href="Printhis.php?id=SAL0704123848" style="color: green">Print</a></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
  </div>
<?php
include 'includes/footer.php';
?>
