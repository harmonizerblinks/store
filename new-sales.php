<?php
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
            <li class="breadcrumb-item active">Add Sales</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
      <div class="card">
          <div class="card-block">
              <h4 class="card-title">Sales Form</h4>
              <h6 class="card-subtitle">Fill the details of the item sold here.</h6>
              <form class="form p-t-20" method="POST" action="logs/addsales.php" role="form" enctype="multipart/form-data">
                <?php
        						if (isset($_GET['msg'])) {
        							echo '
        										<div class="alert alert-info">
        										 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        											<center>
        												<strong>'. $_GET['msg'].'</strong>

        											 </center>
        										 </div>
        										 ';

        						}
        					?>
                  <div class="form-group">
                      <label for="sales_id">Sales ID</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="mdi mdi-key-variant"></i></div>
                          <input type="text" class="form-control" name="sales_id" value="<?php echo "SAL".date('mdhis');?>" required readonly>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="phone">Customer Name/Phone Number<i class="text-sm"> (Optional)</i></label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="mdi mdi-format-text"></i></div>
                          <input type="text" class="form-control" name="phone">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="items_name">Product Name</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="mdi mdi-format-size"></i></div>
                          <input type="text" class="form-control" list="iteml" name="items_name" required>
                          <?php
              					  		include 'logs/itemlist.php';
              					  ?>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="quantity">Quantity</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="mdi mdi-format-list-numbers"></i></div>
                          <input type="number" class="form-control" name="quantity" required>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-success btn-lg waves-effect waves-light m-r-10">Add</button>
									<?php if(isset($_GET['id'])){ echo'
                  <a href="logs/addCart.php?new=sales" class="btn btn-inverse btn-lg waves-effect waves-light">New</a>';
                  }  ?>
              </form>
          </div>
      </div>
  </div>
    <div class="col-lg-6">
      <div class="card">
          <div class="card-block">
              <h4 class="card-title">Print out Report</h4>
              <h6 class="card-subtitle">Sales details to be print out</h6>
              <div class="table-responsive">
                    <?php
                       if(isset($_GET['id'])){
                              $c = 1;
                              include 'logs/connect.php';
                              include 'logs/addCart.php';
                              echo'<table class="table table-striped table-bordered table-hover">
                          <thead>
                            <td>S/N</td>
                            <td>Item Name</td>
                            <td>Price </td>
                            <td>Quantity</td>
                            <td>Total Amount</td>
                          </thead>
                          <tbody>';

                              //print_r($_SESSION["sales"]);
                                  $sales = @ $_SESSION["sales"];
                                    $_SESSION['quantities'] =0;
                                    $_SESSION['total_amt'] = 0;
                                  foreach($sales as $Sale){
                                    $_SESSION['quantities'] += $Sale['quantity'];
                                    $_SESSION['total_amt'] += $Sale['total_amount'];
                                  echo '<tr>
                                    <td>'.$c.'</td>
                                    <td>'.$Sale['items_name'].'</td>
                                    <td>'.$Sale['price'].'</td>
                                    <td>'.$Sale['quantity'].'</td>
                                    <td>'.$Sale['total_amount'].'</td>
                                    </tr>
                                  ';
                                  $c++;
                                }
                                  echo'<tr>
                                    <td>Total</td>
                                    <td></td>
                                    <td></td>
                                    <td>'.$_SESSION['quantities'].'</td>
                                    <td>'.$_SESSION['total_amt'].'</td></tr>';
                                  }
                      ?>
                      </tbody>
                      </table>
            </div>
            <?php
                       if(isset($_GET['id'])){
                        echo '
              <form class="form p-t-20" target="_blank" method="POST" action="print.php" role="form">
                  <div class="form-group">
                      <label for="unitprice">Amount To Pay</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="mdi mdi-currency-eur"></i></div>
                          <input type="number" class="form-control" name="amount" required>
                          <span class="input-group-btn">
                          <button class="btn btn-primary m-r-10 btn-lg waves-effect waves-light" target="_blank" type="submit">Pay</button>
                          </span>
                      </div>
                  </div>
              </form>';
            }
              ?>
          </div>
      </div>
    </div>
  </div>
</div>

<?php
include 'includes/footer.php';
?>
