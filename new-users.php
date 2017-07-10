
<?php
include 'includes/nav.php';
?>
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">New User</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-4">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Add New Inventory User Form</h4>
                <h6 class="card-subtitle">Fill the details of the new employee.</h6>
                <form class="form p-t-20" method="post" action="logs/addUsers.php" role="form" enctype="multipart/form-data">
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
                        <label for="employeeid">Employee ID</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-key-variant"></i></div>
                            <input type="text" class="form-control" name="employeeid" placeholder="Employee ID" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                            <input type="text" class="form-control" name="fullName" placeholder="Full Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                            <input type="password" class="form-control" name="pass" placeholder="Enter Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="conpass">Re-Password</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                            <input type="password" class="form-control" name="conpass" placeholder="Comfirm Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="conpass">Privilege:</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="mdi mdi- "></i></div>
                          <select name="priv" class="form-control" id="privilege"  required>
                            <option value="0"> --- Select Privilege --- </option>
                            <option value="1">Inventory Administartor</option>
                            <option value="2">Sales Personnel</option>
                            <option value="3">Supply Personnel</option>
                            <option value="4">Stock Personnel</option>
                          </select>
                        </div>
                      </div>
                    <button type="submit" name="submit" class="btn btn-success btn-lg waves-effect waves-light m-r-10">Add User</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
                     <div class="card">
                         <div class="card-block">
                             <h4 class="card-title">View All Users Details</h4>
                             <div class="table-responsive m-t-40">
                                  <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                     <thead>
                                         <tr>
                                             <th>Employee ID</th>
                                             <th>Full Name</th>
                                             <th>UserName</th>
                                             <th>Privilege</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tfoot>
                                         <tr>
                                             <th>Employee ID</th>
                                             <th>Full Name</th>
                                             <th>UserName</th>
                                             <th>Privilege</th>
                                             <th>Action</th>
                                         </tr>
                                     </tfoot>
                                     <tbody>
                                         <?php
                                            $c = 1;
                                                    //$conn = new mysqli("localhost", "root", "", "inventory");
                                                        include 'logs/connect.php';

                                                $Users = $conn->query("SELECT * FROM users order by id Desc");
                                                while ($User = $Users->fetch_assoc()) {
                                                    echo '<tr>
                                                        <td>'.$User['employee_id'].'</td>
                                                        <td>'.$User['full_name'].'</td>
                                                        <td>'.$User['emails'].'</td>
                                                        <td>'.$User['privilege'].'</td>
                                            <td><a href="logs/delete.php?id4='.$User['employee_id'].'" style="color: red">Delete</a></td>
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
