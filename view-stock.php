
<?php
include 'includes/nav.php';
?>
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">View All Items In Stock</li>
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
                                             <th>S/N</th>
                                             <th>Stocks ID</th>
                                             <th>Item Name</th>
                                             <th>Price</th>
                                             <th>Qty</th>
                                             <th>Profit</th>
                                             <th>Date</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tfoot>
                                         <tr>
                                             <th>S/N</th>
                                             <th>Stocks ID</th>
                                             <th>Item Name</th>
                                             <th>Price</th>
                                             <th>Qty</th>
                                             <th>Profit</th>
                                             <th>Date</th>
                                             <th>Action</th>
                                         </tr>
                                     </tfoot>
                                     <tbody>
                                     <?php
                                            $c = 1;
                                            include 'logs/connect.php';

                                            $stocks = $conn->query("SELECT * FROM Stock");

                                            while ($stock = $stocks->fetch_assoc()) {
                                                echo '<tr>
                                                    <td>'.$c.'</td>
                                                    <td>'.$stock['stock_id'].'</td>
                                                    <td>'.$stock['items_name'].'</td>
                                                    <td>'.$stock['quantity'].'</td>
                                                    <td>'.$stock['amount'].'</td>
                                                    <td>'.$stock['gain'].'</td>
                                                    <td>'.$stock['date'].'</td>
                                                    <td><a href="logs/delete.php?id2='.$stock['stock_id'].'" style="color: red">Delete</a></td>
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
