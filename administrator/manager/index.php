<?php
	require_once('../header.php');
    $author = new Author;
    $type = new Type;
    $genre = new Genre;
    $publisher = new Publisher;
    $product = new Product;
    $order = new Order;
?>
<div class="clearfix"></div>
	
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mt-3 gradient-deepblue">
            <div class="card-content">
                <div class="row row-group m-0">
                    <div class="col-12 col-lg-6 col-xl-3 border-white-2">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body text-left">
                                    <h4 class="mb-0 text-white">&#8358;<?php echo number_format($product->sumAllProduct()); ?></h4>
                                    <span class="text-white">Total <br>Assets</span>
                                </div>
                                <div class="align-self-center w-icon">
                                    <i class="icon-basket-loaded text-white"></i></div>
                            </div>
                            <div class="progress-wrapper mt-3">
                                <div class="progress" style="height:5px;">
                                    <div class="progress-bar" style="width:50%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-white-2">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body text-left">
                                    <h4 class="mb-0 text-white"><?php echo count($product->seeAllPubProduct()); ?></h4>
                                    <span class="text-white">Published Products</span>
                                </div>
                                <div class="align-self-center w-icon">
                                    <i class="icon-wallet text-white"></i></div>
                            </div>
                            <div class="progress-wrapper mt-3">
                                <div class="progress" style="height:5px;">
                                    <div class="progress-bar" style="width:50%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-white-2">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body text-left">
                                    <h4 class="mb-0 text-white"><?php echo count($product->seeAllUnPubProduct()); ?></h4>
                                    <span class="text-white">UnPublished Products</span>
                                </div>
                                <div class="align-self-center w-icon">
                                    <i class="icon-pie-chart text-white"></i></div>
                            </div>
                            <div class="progress-wrapper mt-3">
                                <div class="progress" style="height:5px;">
                                    <div class="progress-bar" style="width:50%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-white-2">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body text-left">
                                    <h4 class="mb-0 text-white"><?php echo count($order->getAllOrders()) ?></h4>
                                    <span class="text-white">New <br> Orders</span>
                                </div>
                                <div class="align-self-center w-icon">
                                    <i class="icon-user text-white"></i></div>
                            </div>
                            <div class="progress-wrapper mt-3">
                                <div class="progress" style="height:5px;">
                                    <div class="progress-bar" style="width:50%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-army">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body">
                                <span class="text-white">Total Publishers</span>
                                <h3 class="text-white"><?php echo count($publisher->getAllpublisher()); ?></h3>
                            </div>
                            <div class="w-icon">
                                <i class="ti-marker text-white"></i>
                            </div>
                        </div>
                        <div id="widget-chart-4"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-dusk">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body">
                                <span class="text-white">Total Authors</span>
                                <h3 class="text-white"><?php echo count($author->getAllAuthor()); ?></h3>
                            </div>
                            <div class="w-icon">
                                <i class="icon-user text-white"></i>
                            </div>
                        </div>
                        <div id="widget-chart-4"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-orange">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body">
                                <span class="text-white">Total Categories</span>
                                <h3 class="text-white"><?php echo count($type->getAllProductType()) ?></h3>
                            </div>
                            <div class="w-icon">
                                <i class="fa fa-cogs text-white"></i>
                            </div>
                        </div>
                        <div id="widget-chart-4"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-forest">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body">
                                <span class="text-white">Total Genres</span>
                                <h3 class="text-white"><?php echo  count($genre->getAllGenre()); ?></h3>
                            </div>
                            <div class="w-icon">
                                <i class="ti-stats-up text-white"></i>
                            </div>
                        </div>
                        <div id="widget-chart-4"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-forest">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body">
                                <span class="text-white">Total Customer</span>
                                <h3 class="text-white"><?php echo  count($genre->getAllGenre()); ?></h3>
                            </div>
                            <div class="w-icon">
                                <i class="ti-stats-up text-white"></i>
                            </div>
                        </div>
                        <div id="widget-chart-4"></div>
                    </div>
                </div>
            </div>
            
            </div>
        </div><!--End Row-->
		  
    </div>
    <!-- End container-fluid-->
    
</div><!--End content-wrapper-->
         
        

<?php
	require_once('../footer.php');
?>