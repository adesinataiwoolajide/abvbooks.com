<?php session_start();
require_once("../../dev/autoload.php");
if(!isset($_SESSION['id'])){
    $_SESSION['error'] = "Please Login with Your Details";
    header('Location: .././');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>ABV Books and Sataionary</title>
    <!--favicon-->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="../assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="../assets/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="../assets/css/app-style.css" rel="stylesheet"/>
    <link href="../assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  	<link href="../assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../assets/Toast/css/Toast.min.css">

    <!-- link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
 
</head>

<body>

<!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" class="bg-theme bg-theme4" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="./">
                <img src="../assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                <h5 class="logo-text">Book Stores</h5>
                </a>
            </div>
            <div class="user-details">
                <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
                    <div class="avatar">
                        <img class="mr-3 side-user-img" src="../assets/images/logo-icon.png" alt="user avatar">
                    </div>
                    <div class="media-body">
                        <h6 class="side-user-name"><?php echo $_SESSION['name'] ?></h6>
                    </div>
                </div>
                <div id="user-dropdown" class="collapse">
                    <ul class="user-setting-menu">
                        <li><a href=""><i class="icon-user"></i>  My Profile</a></li>
                        <li><a href=""><i class="icon-settings"></i> Setting</a></li>
                        <li><a href="../log-out.php"><i class="icon-power"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li><a href="./" class="waves-effect"><i class="zmdi zmdi-home text-danger"></i> <span>Dashboard</span></a></li>
                <li><a href="category.php" class="waves-effect"><i class="fa fa-cogs text-success"></i> <span>Product Category</span></a></li>
                <li><a href="author.php" class="waves-effect"><i class="fa fa-user-circle-o text-danger"></i> <span>Book Authors</span></a></li>
                <li><a href="publisher.php" class="waves-effect"><i class="fa fa-briefcase text-success"></i> <span>Book Publishers</span></a></li>
                <li><a href="type.php" class="waves-effect"><i class="fa fa-sitemap text-danger"></i> <span>Book Types</span></a></li>
                <li><a href="genre.php" class="waves-effect"><i class="fa fa-sitemap text-danger"></i> <span>Book Genre</span></a></li>

                <li>
                    <a href="" class="waves-effect">
                        <i class="fa fa-book text-success"></i> <span>Products </span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="add-product.php"><i class="zmdi zmdi-long-arrow-right"></i> Add Products</a></li>
                        <li><a href="index2.html"><i class="zmdi zmdi-long-arrow-right"></i> View All Products</a></li>
                    </ul>
                </li>
                <li>
                    <a href="" class="waves-effect">
                        <i class="fa fa-cloud text-danger"></i> <span>Publications </span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="index.html"><i class="zmdi zmdi-long-arrow-right"></i> Publish Products</a></li>
                        <li><a href="index2.html"><i class="zmdi zmdi-long-arrow-right"></i> Un-Publish Products</a></li>
                    </ul>
                </li>
                <li><a href="payments.php" class="waves-effect"><i class="fa fa-money text-danger"></i> <span>Payment</span></a></li>
                <li><a href="order.php" class="waves-effect"><i class="fa fa-shopping-cart text-info"></i> <span>Customer Orders</span></a></li>
                <li><a href="order.php" class="waves-effect"><i class="fa fa-users text-success"></i> <span>Users</span></a></li>
                <li><a href="order.php" class="waves-effect"><i class="fa fa-cloud text-danger"></i> <span>Activity Log</span></a></li>
                <!-- <li>
                    <a href="" class="waves-effect">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Products</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="index.html"><i class="zmdi zmdi-long-arrow-right"></i> Ecommerce</a></li>
                        <li><a href="index2.html"><i class="zmdi zmdi-long-arrow-right"></i> Property Listings</a></li>
                        <li><a href="dashboard-service-support.html"><i class="zmdi zmdi-long-arrow-right"></i> Services & Support</a></li>
                        <li><a href="dashboard-logistics.html"><i class="zmdi zmdi-long-arrow-right"></i> Logistics</a></li>
                    </ul>
                </li> -->
                <li><a href="../log-out.php" class="waves-effect"><i class="fa fa-lock"></i> <span>Logout</span></a></li>
            </ul>
        </div>

        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href=""><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>
        
                <ul class="navbar-nav align-items-center right-nav-link">
                    
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="../assets/images/logo-icon.png" class="img-circle" alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="">
                                <div class="media">
                                    <div class="avatar"><img class="align-self-start mr-3" src="../assets/images/avatars/avatar-13.png" alt="user avatar"></div>
                                    <div class="media-body">
                                    <h6 class="mt-2 user-title"><?php echo $_SESSION['name']; ?></h6>
                                    <p class="user-subtitle"><?php echo $_SESSION['user_name']; ?></p>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>