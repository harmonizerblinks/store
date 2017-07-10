<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Store Inventory Management System">
    <meta name="author" content="ACYST TECHNOLOGY">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Inventory Management System</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon -->
                        <span><h3>ACYST TECH
                        </h3></span>
                        </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-user"></i> <?php echo $_SESSION['inventoryUserFullname'] ?> <i class="ti ti-arrow-circle-down p-t-20"></i></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="logs/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <?php if($_SESSION['inventoryprivilege'] == 1){
                    echo '
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li><a  href="dashboard.php"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-shopping-cart"></i><span class="hide-menu">Sales</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="new-sales.php">Enter Sales</a></li>
                                <li><a href="view-sales.php">View Sales</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-download"></i><span class="hide-menu">Supply</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="new-supply.php">Enter</a></li>
                                <li><a href="view-supply-record.php">View</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-cubes"></i><span class="hide-menu"> Product</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="new-item.php">Add Product</a></li>
                                <li><a href="view-item.php">View All Product</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-database"></i><span class="hide-menu"> Stock</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="new-stock.php">Add Stock</a></li>
                                <li><a href="view-stock.php">View All Stock</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Employees/Users</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="new-employee.php">Add</a></li>
                                <li><a href="view-all-employees.php">View</a></li>
                                <li><a href="new-users.php">Add Login</a></li>
                                <li><a href="payroll.php">Payroll</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false" data-toggle="tooltip" title="Report"><i class="fa fa-files-o"></i><span class="hide-menu">Report</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="widget-data.html">This Month</a></li>
                                <li><a href="widget-charts.html">This Year</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>';
            }else{
                echo'<nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li><a  href="dashboard.php"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Sales</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="new-sales.php">Enter Sales</a></li>
                                <li><a href="view-sales.php">View Sales</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Supply</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="new-supply.php">Enter</a></li>
                                <li><a href="view-supply-record.php">View</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Product</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="new-item.php">Add Product</a></li>
                                <li><a href="view-item.php">View All Product</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Stock</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="new-stock.php">Add Stock</a></li>
                                <li><a href="view-stock.php">View All Stock</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>';
            }
                ?>
                <!-- End Sidebar navigation -->
            </div>
            <div class="sidebar-footer">
                <!-- item-->
                <a role="button" href="#" id="sa-title" class="model_img" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Info"><i class="mdi mdi-information-variant"></i></a>
                <!-- item-->
                <a href="logs/logout.php" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
        </aside>
        <div class="page-wrapper">
        <div class="container-fluid">
