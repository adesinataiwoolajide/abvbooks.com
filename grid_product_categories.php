<?php require('header.php'); 
$genre_name = $_GET['category_name'];
$meth = $genre->getSingleGenreTypeName($genre_name);
$genre_id = $meth['genre_id'];
$totalItems =  count($product->listSingleGensProductS($genre_id));
$itemsPerPage = 12;
$page = isset($_GET['page']) ? ($_GET['page']) : 1;
$start = $page > 1 ? ($page * $itemsPerPage) - $itemsPerPage : 0;
$totalPages = ceil($totalItems / $itemsPerPage);
$listing = $product->getSingleGenProduct($genre_id, $start, $itemsPerPage);
?>
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="./" class="link">home</a></li>
                <li class="item-link"><span><?php echo $genre_name ?> Products</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area" style="margin-top: -60px">

                <div class="banner-shop" align="center" >
                    <a href="grid_shop.php" class="banner-link">
                        <figure><img src="assets/images/stationary 2.jpg" style="width:1000px" alt=""></figure>
                    </a>
                </div>
                <?php 
                    if($totalItems ==0){ ?>
                        <div class="product-info col-md-12"> <h3><p style="color: red" align="center"> No Product is Found For 
                            <?php echo $genre_name ?></h3></p> 
                        </div><?php
                    }else{ ?>

                    <div class="wrap-shop-control">

                        <h1 class="shop-title">List of Products For <?php echo $genre_name ?></h1>

                        <div class="wrap-right">

                        
                            <<div class="change-display-mode">
                                <a href="grid_product_categories.php?category_name=<?php echo $genre_name ?>" 
                                    class="grid-mode display-mode "><i class="flaticon-squares"></i>Grid View</a>
                                <a href="list_product_categories.php?category_name=<?php echo $genre_name ?>"
                                 class="list-mode display-mode active "><i class="flaticon-interface"></i>List View</a>
                            </div>

                        </div>

                    </div><!--end wrap shop control-->

                    <div class="row">

                        <ul class="product-list grid-products equal-container"><?php
                            foreach($listing as $listShop){ ?>
                                <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                    <div class="product product-style-3 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="product_details.php?slug=<?php echo $listShop['slug'] ?>" title="<?php echo $listShop['product_name'] ?>">
                                                <figure><img src="<?php echo "assets/images/product/".$listShop['image'] ?>" alt="<?php echo $listShop['product_name'] ?>"></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="product_details.php?slug=<?php echo $listShop['slug'] ?>" class="product-name"><span><?php echo $listShop['product_name'] ?></span></a>
                                            <div class="wrap-price"><ins><p class="product-price" style="color: green">
                                                &#8358;<?php echo number_format($listShop['amount']); ?></p></ins> 
                                                <del><p class="product-price" style="color: red"><?php
                                                    $num3= (40/100)*$listShop['amount'];
                                                    $adding2 = $num3 + $listShop['amount']; ?>
                                                    
                                                    &#8358;<?php echo number_format($adding2) ?>
                                                </p></del>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="handlers/registration/addit.php?slug=<?php echo $listShop['slug'] ?>&&action=<?php echo 'Compare' ?>" 
                                                class="btn btn-compare">Add Compare</a>
                                                <a href="handlers/registration/addit.php?slug=<?php echo $listShop['slug'] ?>&&action=<?php echo 'Wishlist' ?>" 
                                                class="btn btn-wishlist">Add Wishlist</a>
                                            </div>
                                            <a href="product_details.php?slug=<?php echo $listShop['slug'] ?>" class="btn add-to-cart">More Details</a>
                                            
                                        </div>
                                    </div>
                                </li><?php
                            } ?>


                        </ul>

                    </div>

                    <div class="wrap-pagination-info">
                         <?php 
                        if($totalItems > 0){ ?>
                            <ul class="page-numbers">
                                <?php $b = $page - 1;
                                if($page != 1){ ?>
                                      <li class="prev"><a href="list_product_categories.php?category_name=<?php echo $genre_name ?>&&page=<?php echo $page - 1?>" class="page-number-item prev-link">Previous <i class="fa fa-angle-left"></i></a></li>
                                <?php } ?>

                                <?php if($page != $totalPages){ ?>
                                      <li><a href="list_product_categories.php?category_name=<?php echo $genre_name ?>&&page=<?php echo $page + 1?>" class="page-number-item next-link"><i class="fa fa-angle-right"></i> Next</a></li>
                                <?php } ?>                                        
                            </ul>
                            <p class="result-count">Showing <?php echo $totalItems ?> of <?php echo $itemsPerPage ?> result</p><?php 
                        } ?>
                        
                    </div><?php 
                } ?>
            </div><!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget mercado-widget categories-widget">
                        <h2 class="widget-title">All Categories</h2>
                        <div class="widget-content">
                            <ul class="list-category"><?php
                                foreach($type->getAllProductTypeDesc() as $side){ ?>
                                    <li class="category-item has-child-cate">
                                        <a href="#" class="cate-link"><?php echo $side['type_name'] ?></a>
                                        <span class="toggle-control">+</span>
                                        <ul class="sub-cate"><?php
                                            foreach($type->getTypeGenre($type_id) as $see){ $test = $see['genre_name'] ?>
                                                <li class="category-item">
                                                <a href="list_product_categories.php?category_name=<?php echo $test ?>" class="cate-link" >
                                                    <?php echo $test; ?></a>
                                                </li><?php 
                                            } ?>
                                        </ul>
                                    </li><?php
                                } ?>
                                
                                <li class="category-item">
                                    <a href="liat_shop.php" class="cate-link">View All</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Categories widget-->

                    <div class="widget mercado-widget filter-widget brand-widget">
                        <h2 class="widget-title">Product Manufacturer</h2>
                        <div class="widget-content">
                            <ul class="list-style vertical-list list-limited" data-show="10"><?php 
                                foreach($publisher->getAllPublisherSide() as $manu){ ?>
                                    <li class="list-item">
                                        <a class="filter-link" href="manufacturer_products.php?manufacturer_name=<?php echo $manu['publisher_name'] ?>">
                                        <?php echo $manu['publisher_name'] ?></a>
                                    </li><?php 
                                } ?>
                                <li class="list-item default-hiden"><a class="filter-link " href="grid_shop.php">All Manufacturer</a></li>
                                <li class="list-item"><a data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- brand widget-->

                    <div class="widget mercado-widget widget-product">
                        <h2 class="widget-title">Category Products </h2>
                        <div class="widget-content">
                            <ul class="products"><?php 
                                $listCat =$product->getSingleGensProductS($genre_id);
                                $category_id = $listCat['category_id'];
                                foreach($product->getSingleCategoryProductSide($category_id) as $listPub){ ?>
                                    <li class="product-item">
                                        <div class="product product-widget-style">
                                            <div class="thumbnnail">
                                                <a href="product_details.php?slug=<?php echo $listPub['slug'] ?>" title="<?php echo $listThr['product_name'] ?>">
                                                    <figure><img src="<?php echo "assets/images/product/".$listPub['image'] ?>" alt=""></figure>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <a href="product_details.php?slug=<?php echo $listPub['slug'] ?>" title="<?php echo $listThr['product_name'] ?>"
                                                        class="product-name"><span><?php echo $listPub['product_name']; ?></span></a>
                                                <div class="wrap-price"><ins><p class="product-price" style="color: green">
                                                    &#8358;<?php echo number_format($listPub['amount']); ?></p></ins> 
                                                    <del><p class="product-price" style="color: red"><?php
                                                        $nu= (40/100)*$listPub['amount'];
                                                        $add = $nu + $listPub['amount']; ?>
                                                        
                                                        &#8358;<?php echo number_format($add) ?>
                                                    </p></del>
                                                </div>
                                            </div>
                                        </div>
                                    </li><?php 
                                } ?>  
                            </ul>
                        </div>
                    </div><!-- brand widget-->

                </div>

        </div><!--end row-->

    </div><!--end container-->

</main>
    
<?php require('footer.php'); ?>