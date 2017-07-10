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
            <li class="breadcrumb-item active">View All Products</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">View Sales Report</h4>
                <h6 class="card-subtitle">Export data to Copy, Excel, PDF & Print</h6>
                <div class="table-responsive m-t-40">
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
