
<?php
include 'includes/nav.php';
?>
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">View All Supplies</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
        <button class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button>
        <div class="dropdown pull-right m-r-10 hidden-sm-down">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                January 2017
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">February 2017</a>
                <a class="dropdown-item" href="#">March 2017</a>
                <a class="dropdown-item" href="#">April 2017</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
                 <div class="col-12">
                     <div class="card">
                         <div class="card-block">
                             <h4 class="card-title">View All Supplies Details</h4>
                             <h6 class="card-subtitle">Export data to Copy, Excel, PDF & Print</h6>
                             <div class="table-responsive m-t-40">
                                  <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                     <thead>
                                         <tr>
                                             <th>S/N</th>
                                             <th>Sales ID</th>
                                             <th>Item Name</th>
                                             <th>Cust. Name/No</th>
                                             <th>Price</th>
                                             <th>Qty</th>
                                             <th>Total</th>
                                             <th>Date</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tfoot>
                                         <tr>
                                           <th>S/N</th>
                                           <th>Sales ID</th>
                                           <th>Item Name</th>
                                           <th>Cust. Name/No</th>
                                           <th>Price</th>
                                           <th>Qty</th>
                                           <th>Total</th>
                                           <th>Date</th>
                                           <th>Action</th>
                                         </tr>
                                     </tfoot>
                                     <tbody>
                                       <tr>
                        									<td>1</td>
                        									<td>SAL0703104402</td>
                        									<td>Iphone</td>
                        									<td>0238288675</td>
                        									<td>2500</td>
                        									<td>20</td>
                        									<td>50000</td>
                        									<td>2017-07-03</td>
                        									<td><a href="logs/delete.php?id=SAL0703104402" style="color: red">Delete</a></td>
                        									</tr>
                        								<tr>
                        									<td>2</td>
                        									<td>SAL0703105235</td>
                        									<td>Coke 1.5 ltrs</td>
                        									<td>steve</td>
                        									<td>250</td>
                        									<td>2</td>
                        									<td>500</td>
                        									<td>2017-07-03</td>
                        									<td><a href="logs/delete.php?id=SAL0703105235" style="color: red">Delete</a></td>
                        									</tr>
                        								<tr>
                        									<td>3</td>
                        									<td>SAL0703111849</td>
                        									<td>Iphone</td>
                        									<td>0238288675</td>
                        									<td>2500</td>
                        									<td>20</td>
                        									<td>50000</td>
                        									<td>2017-07-03</td>
                        									<td><a href="logs/delete.php?id=SAL0703111849" style="color: red">Delete</a></td>
                        									</tr>
                        								<tr>
                        									<td>4</td>
                        									<td>SAL0703112248</td>
                        									<td>Coke 1.5 ltrs</td>
                        									<td></td>
                        									<td>250</td>
                        									<td>1</td>
                        									<td>250</td>
                        									<td>2017-07-03</td>
                        									<td><a href="logs/delete.php?id=SAL0703112248" style="color: red">Delete</a></td>
                        									</tr>
                        								<tr>
                        									<td>5</td>
                        									<td>SAL0704123848</td>
                        									<td>Iphone</td>
                        									<td>Innocent</td>
                        									<td>2500</td>
                        									<td>12</td>
                        									<td>30000</td>
                        									<td>2017-07-04</td>
                        									<td><a href="logs/delete.php?id=SAL0704123848" style="color: red">Delete</a></td>
                        								</tr>
                                        <tr>
                            							<td>6</td>
                            							<td>SAL0703104402</td>
                            							<td>Iphone</td>
                            							<td>0238288675</td>
                            							<td>2500</td>
                            							<td>20</td>
                            							<td>50000</td>
                            							<td>2017-07-03</td>
                            							<td><a href="logs/delete.php?id=SAL0703104402" style="color: red">Delete</a></td>
                            							</tr>
                            						<tr>
                            							<td>7</td>
                            							<td>SAL0703105235</td>
                            							<td>Coke 1.5 ltrs</td>
                            							<td>steve</td>
                            							<td>250</td>
                            							<td>2</td>
                            							<td>500</td>
                            							<td>2017-07-03</td>
                            							<td><a href="logs/delete.php?id=SAL0703105235" style="color: red">Delete</a></td>
                            							</tr>
                            						<tr>
                            							<td>8</td>
                            							<td>SAL0703111849</td>
                            							<td>Iphone</td>
                            							<td>0238288675</td>
                            							<td>2500</td>
                            							<td>20</td>
                            							<td>50000</td>
                            							<td>2017-07-03</td>
                            							<td><a href="logs/delete.php?id=SAL0703111849" style="color: red">Delete</a></td>
                            							</tr>
                            						<tr>
                            							<td>9</td>
                            							<td>SAL0703112248</td>
                            							<td>Coke 1.5 ltrs</td>
                            							<td></td>
                            							<td>250</td>
                            							<td>1</td>
                            							<td>250</td>
                            							<td>2017-07-03</td>
                            							<td><a href="logs/delete.php?id=SAL0703112248" style="color: red">Delete</a></td>
                            							</tr>
                            						<tr>
                            							<td>10</td>
                            							<td>SAL0704123848</td>
                            							<td>Iphone</td>
                            							<td>Innocent</td>
                            							<td>2500</td>
                            							<td>12</td>
                            							<td>30000</td>
                            							<td>2017-07-04</td>
                            							<td><a href="logs/delete.php?id=SAL0704123848" style="color: red">Delete</a></td>
                            						</tr>
                                        <tr>
                        									<td>11</td>
                        									<td>SAL0703104402</td>
                        									<td>Iphone</td>
                        									<td>0238288675</td>
                        									<td>2500</td>
                        									<td>20</td>
                        									<td>50000</td>
                        									<td>2017-07-03</td>
                        									<td><a href="logs/delete.php?id=SAL0703104402" style="color: red">Delete</a></td>
                        									</tr>
                        								<tr>
                        									<td>12</td>
                        									<td>SAL0703105235</td>
                        									<td>Coke 1.5 ltrs</td>
                        									<td>steve</td>
                        									<td>250</td>
                        									<td>2</td>
                        									<td>500</td>
                        									<td>2017-07-03</td>
                        									<td><a href="logs/delete.php?id=SAL0703105235" style="color: red">Delete</a></td>
                        									</tr>
                        								<tr>
                        									<td>13</td>
                        									<td>SAL0703111849</td>
                        									<td>Iphone</td>
                        									<td>0238288675</td>
                        									<td>2500</td>
                        									<td>20</td>
                        									<td>50000</td>
                        									<td>2017-07-03</td>
                        									<td><a href="logs/delete.php?id=SAL0703111849" style="color: red">Delete</a></td>
                        									</tr>
                        								<tr>
                        									<td>14</td>
                        									<td>SAL0703112248</td>
                        									<td>Coke 1.5 ltrs</td>
                        									<td></td>
                        									<td>250</td>
                        									<td>1</td>
                        									<td>250</td>
                        									<td>2017-07-03</td>
                        									<td><a href="logs/delete.php?id=SAL0703112248" style="color: red">Delete</a></td>
                        									</tr>
                        								<tr>
                        									<td>15</td>
                        									<td>SAL0704123848</td>
                        									<td>Iphone</td>
                        									<td>Innocent</td>
                        									<td>2500</td>
                        									<td>12</td>
                        									<td>30000</td>
                        									<td>2017-07-04</td>
                        									<td><a href="logs/delete.php?id=SAL0704123848" style="color: red">Delete</a></td>
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
