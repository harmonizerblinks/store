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
                    <table id="example23" class="table table-hover table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>S/N</th>
                              <th>Item Name</th>
                              <th>Item Name</th>
                              <th>Qty</th>
                              <th>Sub Total</th>
                              <th>Gain</th>
                              <th>Total</th>
                          </tr>
                      </thead>
                      <tbody>
    <?php
        include 'logs/sale-rep.php';
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
