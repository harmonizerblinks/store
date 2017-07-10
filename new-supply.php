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
            <li class="breadcrumb-item active">New Supply</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-4">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Supply Form</h4>
                <h6 class="card-subtitle">Fill the details of the supplier.</h6>
                <form class="form p-t-20" action="logs/addsupply.php" >
                    <?php
                    if (isset($_GET['msg'])) {
                        echo '
                                    <div class="alert alert-info">
                                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <center>
                                            <strong>'. $_GET['msg'].'</strong>
                                     </center>
                                    </div>';
                                }
                            ?>
                    <div class="form-group">
                        <label for="sales_id">Supply ID</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-key-variant"></i></div>
                            <input type="text" class="form-control" name="supply_id" value="<?php echo "SUP".date('mdhis');?>" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fullName">Customer Name</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-format-text"></i></div>
                            <input type="text" class="form-control" name="fullName">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-format-text"></i></div>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="items_name">Product Name</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-format-size"></i></div>
                            <input type="text" class="form-control" name="items_name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-format-list-numbers"></i></div>
                            <input type="number" class="form-control" name="quantity" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="delivery">Delivery Address</label>
                        <div class="input-group">
                            <textarea name="resident" rows="6" class="form-control"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg waves-effect waves-light m-r-10">Add Stocks</button>
                    <button type="reset" class="btn btn-inverse btn-lg waves-effect waves-light">New</button>
                </form>
            </div>
        </div>
    </div>
  </div>
<?php
include 'includes/footer.php';
?>
