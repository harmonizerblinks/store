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
            <li class="breadcrumb-item active">View All Employees/li>
        </ol>
    </div>
</div>
<div class="row">
                 <div class="col-12">
                     <div class="card">
                         <div class="card-block">
                             <h4 class="card-title">View All Employees Details</h4>
                             <div class="table-responsive m-t-40">
                                  <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                     <thead>
                                         <tr>
                                             <th>S/N</th>
                                             <th>Passport</th>
                                             <th>Employee ID</th>
                                             <th>Full Name</th>
                                             <th>Phone</th>
                                             <th>Position</th>
                                             <th>DOB</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tfoot>
                                         <tr>
                                             <th>S/N</th>
                                             <th>Passport</th>
                                             <th>Employee ID</th>
                                             <th>Full Name</th>
                                             <th>Phone</th>
                                             <th>Position</th>
                                             <th>DOB</th>
                                             <th>Action</th>
                                         </tr>
                                     </tfoot>
                                     <tbody>

                        <?php
                            $c = 1;
                            include 'logs/connect.php';

                            $Employees = $conn->query("SELECT * FROM Employees");

                            while ($employee = $Employees->fetch_assoc()) {
                                echo '<tr>
                                    <td>'.$c.'</td>
                                    <td><img src="assets/images/employ/'.$employee['pix'].'" width="60" height="80" /></td>
                                    <td>'.$employee['employee_id'].'</td>
                                    <td>'.$employee['full_name'].'</td>
                                    <td>'.$employee['phone'].'</td>
                                    <td>'.$employee['position'].'</td>
                                    <td>'.$employee['date_of_birth'].'</td>
                                    <td><a href="logs/delete.php?id='.$employee['employee_id'].'" style="color: red">Delete</a></td>
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
