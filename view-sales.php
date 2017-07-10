
<?php
include 'includes/nav.php';
?>
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">View All Sales</li>
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
                                             <th>Sales ID</th>
                                             <th>Item Name</th>
                                             <th>Price</th>
                                             <th>Qty</th>
                                             <th>Total</th>
                                             <th>Date</th>
                                         </tr>
                                     </thead>
                                     <tfoot>
                                         <tr>
                                             <th>S/N</th>
                                             <th>Sales ID</th>
                                             <th>Item Name</th>
                                             <th>Price</th>
                                             <th>Qty</th>
                                             <th>Total</th>
                                             <th>Date</th>
                                         </tr>
                                     </tfoot>
                                     <tbody>
                                <?php
                                                $c = 1;
                                                include 'logs/connect.php';

                                                $Sales = $conn->query("SELECT * FROM Sales order by id desc");

                                                while ($Sale = $Sales->fetch_assoc()) {
                                                  echo '<tr>
                                                    <td>'.$c.'</td>
                                                    <td>'.$Sale['sales_id'].'</td>
                                                    <td>'.$Sale['items_name'].'</td>
                                                    <td>'.$Sale['price'].'</td>
                                                    <td>'.$Sale['quantity'].'</td>
                                                    <td>'.$Sale['total_amount'].'</td>
                                                    <td>'.$Sale['date'].'</td>
                                                    </tr>
                                                  ';
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
