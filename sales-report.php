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
                              <th>Item ID</th>
                              <th>Item Name</th>
                              <th>Qty</th>
                              <th>Sub Total</th>
                              <th>Profit</th>
                              <th>Total Amount</th>
                          </tr>
                      </thead>
                      <tbody>
									 			<?php
														$c = 1;
														include 'logs/connect.php';

													$item = $conn->query("SELECT * FROM items");
													while($items = $item->fetch_assoc()){
                            $_SESSION['report_sub'] = 0;
                            $_SESSION['report_gain'] = 0;
                            $_SESSION['report_quantity'] = 0;
                            $_SESSION['report_amount'] = 0;

																	 $Sales = $conn->query("SELECT * FROM Sales where items_name =".$items['items_name']);
																	 while ($Sale = $Sales->fetch_assoc()) {
																		 $_SESSION['report_amount'] += $Sale['total_amount'];
																		 $_SESSION['report_gain'] += $Sale['gain'];
																		 $_SESSION['report_quantity'] += $Sale['quantity'];
																	}
														$_SESSION['report_sub'] = $_SESSION['report_amount'] - $_SESSION['report_gain'];
														echo '<tr>
															<td>'.$c.'</td>
															<td>'.$items['item_id'].'</td>
														<td>'.$items['items_name'].'</td>
															<td>'.$_SESSION['report_quantity'].'</td>
															<td>'.$_SESSION['report_sub'].'</td>
															<td>'.$_SESSION['report_gain'].'</td>
															<td>'.$_SESSION['report_amount'].'</td>
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
