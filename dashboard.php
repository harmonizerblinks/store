<?php
	ob_start();
	session_start();

	if(empty($_SESSION['inventoryUserEmail']) || !isset($_SESSION['inventoryUserEmail'])){

			header("location: index.php");
	}?>
<?php
include 'includes/nav.php';
?>
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
											<div class="pull-right">
												<a href="new-sales.php" class="btn btn-lg hidden-sm-down btn-success "><i class="fa fa-shopping-cart"></i> New Sales</a>
												<a href="new-supply.php" class="btn btn-lg hidden-sm-down btn-primary p-r-10"><i class="fa fa-download"></i> New Supply</a>
											</div>

                    </div>
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Daily Sales</h4>
                                <div class="text-right">
                                    <h2 class="font-light m-b-0"><i class="fa fa-calendar text-success"></i>
                                <?php
                                    include 'logs/connect.php';
                                    $date = date('y-m-d');
                                    $id = $conn->query("SELECT count(*) as id From Sales where date = $date")->fetch_assoc();

                                    echo $id['id'];
                                ?>
                                </h2>
                                    <span class="text-muted">Todays Sales</span>
                                </div>
                                <span class="text-success"><?php
                                    include 'logs/connect.php';
                                    $date = date('y-m-d');
                                    $id = $conn->query("SELECT count(*) as id From Sales where date = $date")->fetch_assoc();

                                    echo $id['id'];
                                ?>%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php
		                                    include 'logs/connect.php';
		                                    $date = date('y-m-d');
		                                    $id = $conn->query("SELECT count(*) as id From Sales where date = $date")->fetch_assoc();

		                                    echo $id['id'];
		                                ?>%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">All Sales</h4>
                                <div class="text-right">
                                    <h2 class="font-light m-b-0"><i class="fa fa-shopping-cart text-info"></i>
                                    <?php
                                    include 'logs/connect.php';
                                    $id = $conn->query("SELECT count(*) as id From Sales")->fetch_assoc();

                                    echo $id['id'];
                                    ?>
                                    </h2>
                                    <span class="text-muted">Sales No</span>
                                </div>
                                <span class="text-info"><?php
                                    include 'logs/connect.php';
                                    $id = $conn->query("SELECT count(*) as id From Sales")->fetch_assoc();

                                    echo $id['id'];
                                    ?>%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: <?php
                                    include 'logs/connect.php';
                                    $id = $conn->query("SELECT count(*) as id From Sales")->fetch_assoc();

                                    echo $id['id'];
                                    ?>%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">All Supply</h4>
                                <div class="text-right">
                                    <h2 class="font-light m-b-0"><i class="fa fa-download text-purple"></i>
                                    <?php
                                    include 'logs/connect.php';
                                    $id = $conn->query("SELECT count(*) as id From Supply")->fetch_assoc();

                                    echo $id['id'];
                                    ?>
                                    </h2>
                                    <span class="text-muted">Todays Income</span>
                                </div>
                                <span class="text-purple"><?php
																include 'logs/connect.php';
																$id = $conn->query("SELECT count(*) as id From Supply")->fetch_assoc();

																echo $id['id'];
																?>%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-purple" role="progressbar" style="width: <?php
                                    include 'logs/connect.php';
                                    $id = $conn->query("SELECT count(*) as id From Supply")->fetch_assoc();

                                    echo $id['id'];
                                    ?>%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Total Items In Store</h4>
                                <div class="text-right">
                                    <h2 class="font-light m-b-0"><i class="fa fa-database text-danger"></i>
                                    <?php
                                    include 'logs/connect.php';
                                    $id = $conn->query("SELECT count(*) as id From items")->fetch_assoc();

                                    echo $id['id'];
                                    ?>
                                    </h2>
                                    <span class="text-muted">Total Items</span>
                                </div>
                                <span class="text-danger"><?php
                                    include 'logs/connect.php';
                                    $id = $conn->query("SELECT count(*) as id From items")->fetch_assoc();

                                    echo $id['id'];
                                    ?>%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?php
                                    include 'logs/connect.php';
                                    $id = $conn->query("SELECT count(*) as id From items")->fetch_assoc();

                                    echo $id['id'];
                                    ?>%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
            <?php
                include 'logs/connect.php';
                $id = $conn->query("SELECT count(*) as quantity From stock where quantity<=20")->fetch_assoc();
                $items = $conn->query("SELECT * From stock where quantity<=20 Order by quantity limit 12");
                if($id < 0){
                echo '<div class="row">
            <div style="padding-left: 20px" class="page-header"><h2 class="text-danger">Top #12 Products running out of stock</h2></div><div class="row">';
                while ($item = $items->fetch_assoc()){
                    echo'<div class="col-lg-2 col-md-4">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">'.$item['items_name'].'</h4>
                            <div class="text-right">
                                <h2 class="font-light m-b-0"><i class="ti-arrow-down text-danger"></i>'.$item['quantity'].'</h2>
                                <span class="text-muted">Remaining Quantity</span>
                            </div>
                        </div>
                    </div>
                </div>';
                }
            }
            ?>
    </div>
             <div class="container-fluid">   <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3>Revenue Statistics</h3>
                                                <h6 class="card-subtitle">January 2017</h6> </div>
                                            <div class="ml-auto ">
                                                <ul class="list-inline">
                                                    <li>
                                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-success"></i>Product A</h6> </li>
                                                    <li>
                                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-info"></i>Product B</h6> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="total-revenue4" style="height: 350px;"></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                                        <h1 class="m-b-0 font-light">$54578</h1>
                                        <h6 class="text-muted">Total Revenue</h6></div>
                                    <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                                        <h1 class="m-b-0 font-light">$43451</h1>
                                        <h6 class="text-muted">Online Revenue</h6></div>
                                    <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                                        <h1 class="m-b-0 font-light">$44578</h1>
                                        <h6 class="text-muted">Product A</h6></div>
                                    <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                                        <h1 class="m-b-0 font-light">$12578</h1>
                                        <h6 class="text-muted">Product B</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Sales of the Month</h4>
                                <div id="sales-donute" style="width:100%; height:300px;"></div>
                                <div class="round-overlap m-t-20"><i class="mdi mdi-cart"></i></div>
                                <ul class="list-inline m-t-30 text-center">
                                    <li><i class="fa fa-circle text-purple"></i> Item A</li>
                                    <li><i class="fa fa-circle text-success"></i> Item B</li>
                                    <li><i class="fa fa-circle text-info"></i> Item C</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">Sales Difference</h4>
                                        <div class="d-flex flex-row">
                                            <div class="align-self-center">
                                                <span class="display-6">$4316</span>
                                                <h6 class="text-muted">(150-165 Sales)</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="ct-chart" style="width:120px; height: 120px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
    include 'includes/footer.php';
    ?>
