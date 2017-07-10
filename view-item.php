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
                             <h4 class="card-title">View All Sales Details</h4>
                             <h6 class="card-subtitle">Export data to Copy, Excel, PDF & Print</h6>
                             <div class="table-responsive m-t-40">
                                  <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                     <thead>
                                         <tr>
                                             <th>S/N</th>
                                             <th>Item ID</th>
                                             <th>Item Name</th>
                                             <th>Sales Price</th>
                                             <th>Purchase Price</th>
											 <th>Date</th>
											 <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tfoot>
                                         <tr>
											 <th>S/N</th>
											 <th>Item ID</th>
											 <th>Item Name</th>
											 <th>Sales Price</th>
											 <th>Purchase Price</th>
											 <th>Date</th>
											 <th>Action</th>
                                         </tr>
                                     </tfoot>
                                     <tbody>
										 <?php
											$c = 1;
													//$conn = new mysqli("localhost", "root", "", "inventory");
														include 'logs/connect.php';

												$Items = $conn->query("SELECT * FROM items order by id Desc");
												while ($Item = $Items->fetch_assoc()) {
													echo '<tr>
														<td>'.$c.'</td>
														<td>'.$Item['item_id'].'</td>
														<td>'.$Item['items_name'].'</td>
														<td>'.$Item['price'].'</td>
														<td>'.$Item['purchase_price'].'</td>
														<td>'.$Item['date'].'</td>
											<td><a href="logs/delete.php?id1='.$Item['item_id'].'" style="color: red">Delete</a></td>
														</tr>';
													$c++;
												}

											?>
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
