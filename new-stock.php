<?php
include 'includes/nav.php';
?>
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">New Stock</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-4">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">New Product Form</h4>
                <h6 class="card-subtitle">Fill the details of the item sold here.</h6>
                <form class="form p-t-20" method="post" action="logs/addstock.php">
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
                            <input type="text" class="form-control" name="stock_id" value="<?php echo "STK".date('mdhis'); ?>" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="items_name">Product Name</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-format-size"></i></div>
                            <input type="text" class="form-control" list="iteml" name="items_name" placeholder="Product/Item Name">
                        </div>
                    </div>
                    <?php
                        include 'logs/itemlist.php';
                    ?>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-format-list-numbers"></i></div>
                            <input type="number" class="form-control" name="quantity" placeholder="Enter the quantity of item bought">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success btn-lg waves-effect waves-light m-r-10">Add</button>
                    <button type="submit" class="btn btn-inverse btn-lg waves-effect waves-light" disabled>New</button>
                </form>
            </div>
        </div>
    </div>
  </div>
<?php
include 'includes/footer.php';
?>
