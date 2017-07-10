
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
                <h4 class="card-title">New Product Form</h4>
                <h6 class="card-subtitle">Fill the details of the new product.</h6>
                <form class="form p-t-20" method="post" action="logs/addproducts.php" role="form" enctype="multipart/form-data">
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
                        <label for="sales_id">Product ID</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-key-variant"></i></div>
                            <input type="text" class="form-control" name="item_id" value="<?php echo "ITM".date('mdhis'); ?>" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Product Name</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-format-text"></i></div>
                            <input type="text" class="form-control" list="iteml" name="items_name" placeholder="Product Name" required>
                        </div>
                    </div>
										<?php
									  		include 'logs/itemlist.php';
									  ?>
                    <div class="form-group">
                        <label for="items_name">Purchase Price</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-currency-eur"></i></div>
                            <input type="number" class="form-control" step="any" name="purchase" placeholder="Purchase Price" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="unitprice">Sales Price</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-currency-eur"></i></div>
                            <input type="number" class="form-control" step="any" name="sales_price" placeholder="Sales Price" required>
                        </div>
                    </div>
										<div class="form-group">
                        <label for="phone">Category</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-reorder"></i></div>
                            <input type="text" class="form-control" list="catlst" name="categoryname" placeholder="Category Name" required>
                        </div>
                    </div>
										<?php
									  		include 'logs\categorylist.php';
									  ?>
                    <button type="submit" name="submit" class="btn btn-success btn-lg waves-effect waves-light m-r-10">Add</button>
                </form>
            </div>
        </div>
    </div>
  </div>
<?php
include 'includes/footer.php';
?>
