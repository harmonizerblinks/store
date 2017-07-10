<?php
include 'includes/nav.php';
?>
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Add Category</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-4">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Add New Category</h4>
                <form class="form p-t-20" method="post" action="logs\addCategory.php" role="form" enctype="multipart/form-data">
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
		                        <label for="sales_id">Category ID</label>
		                        <div class="input-group">
		                            <div class="input-group-addon"><i class="mdi mdi-key-variant"></i></div>
		                            <input type="text" class="form-control" name="categoryid" value="<?php echo "CAT".date('his'); ?>" required readonly>
		                        </div>
		                    </div>
                    <div class="form-group">
                        <label for="fullName">Category Name</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-reorder"></i></div>
                            <input type="text" class="form-control" name="categoryname" placeholder="Category Name" required>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success btn-lg waves-effect waves-light m-r-10">Add Category</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
                     <div class="card">
                         <div class="card-block">
                             <h4 class="card-title">All Categories</h4>
                             <div class="table-responsive m-t-40">
                                  <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                     <thead>
                                         <tr>
                                             <th>Cat ID</th>
                                             <th>Name</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tfoot>
                                         <tr>
                                           <th>Cat ID</th>
                                           <th>Category Name</th>
                                           <th>Action</th>
                                         </tr>
                                     </tfoot>
                                     <tbody>
                                         <?php
                                            $c = 1;
                                                    //$conn = new mysqli("localhost", "root", "", "inventory");
                                                        include 'logs/connect.php';

                                                $Users = $conn->query("SELECT * FROM category order by id Desc");
                                                while ($User = $Users->fetch_assoc()) {
                                                    echo '<tr>
                                                        <td>'.$User['cat_id'].'</td>
                                                        <td>'.$User['cat_name'].'</td>
                                            <td><a href="logs/delete.php?id5='.$User['cat_id'].'" style="color: red">Delete</a></td>
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
