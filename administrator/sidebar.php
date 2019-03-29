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
                <li><a href=""><i class="icon-power"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li><a href="./" class="waves-effect"><i class="zmdi zmdi-home text-danger"></i> <span>Dashboard</span></a></li>
        
        <li><a href="author.php" class="waves-effect"><i class="fa fa-user-circle-o text-danger"></i> <span>Book Authors</span></a></li>
        <li><a href="publisher.php" class="waves-effect"><i class="fa fa-briefcase text-success"></i> <span>Book Publishers</span></a></li>
        <li><a href="type.php" class="waves-effect"><i class="fa fa-sitemap text-danger"></i> <span>Book Types</span></a></li>
        <li><a href="genre.php" class="waves-effect"><i class="fa fa-sitemap text-danger"></i> <span>Book Genre</span></a></li>
        <li><a href="category.php" class="waves-effect"><i class="fa fa-cogs text-success"></i> <span>Product Category</span></a></li>
        <li><a href="category.php" class="waves-effect"><i class="fa fa-cogs text-success"></i> <span>Product Category</span></a></li>
        <li><a href="products.php" class="waves-effect"><i class="fa fa-book text-info"></i> <span>Products</span></a></li>
        <li><a href="view-order.php" class="waves-effect"><i class="fa fa-shopping-cart text-info"></i> <span>Customer Orders</span></a></li>
        <li><a href="paymants.php" class="waves-effect"><i class="fa fa-money text-info"></i> <span>Payment</span></a></li>
        <li><a href="order.php" class="waves-effect"><i class="fa fa-users text-info"></i> <span>Users</span></a></li>
        <li><a href="order.php" class="waves-effect"><i class="fa fa-cloud text-info"></i> <span>Activity Log</span></a></li>
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