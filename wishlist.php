<?php require('header.php'); 
$reg_number = $_GET['registration_number'];
$customer_id = $reg_number;
$totalItems =  count($register->gettingWishListNoPag($reg_number));
$details = $customer->getAllSingleCustomer($customer_id);
$name = $details['full_name'];
$roll = $product->getCusWishProduct($customer_id);
?>
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="./" class="link">home</a></li>
                <li class="item-link"><span><?php echo $name ?> Wishlist Products</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area" style="margin-top: -60px">

                <div class="banner-shop" align="center" >
                    <a href="grid_shop.php" class="banner-link">
                        <figure><img src="assets/images/new4.jpg" style="height:300px " alt=""></figure>
                    </a>
                </div>
                <?php 
                if($totalItems ==0){ ?>
                    <div class="product-info col-md-12"> <h3><p style="color: red" align="center">
                    <?php echo $name; ?> Your Wish List is Empty</h3></p> 
                    </div><?php
                }else{ ?>

                    <div class="wrap-shop-control">

                        <h1 class="shop-title"><?php echo $name; ?> Please Kindly Preview Your Wishlist below</h1>

                        <div class="wrap-right">

                            <div class="change-display-mode">
                                <a href="wishlist.php?registration_number=<?php echo $customer_id ?>" 
                                    class="grid-mode display-mode "><i class="flaticon-interface"></i>List View
                                </a>
                                
                            </div>

                        </div>

                    </div><!--end wrap shop control-->

                    <div class="row">
                        <div class="wrap-show-advance-info-box style-1 has-countdown">
						    <h3 class="title-box"><?php echo "$name"; ?> Product Wishlists</h3>
						    
						    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'><?PHP
						    	foreach($product->getCusWishProduct($customer_id) as $seewish){
	                                $slug = $seewish['slug'];
	                                foreach($product->getSingleLoopProduct($slug) as $listThr){ ?>
						        
							            <div class="product product-style-2 equal-elem ">
							                <div class="product-thumnail">
							                    <a href="product_details.php?slug=<?php echo $listThr['slug'] ?>" title="<?php echo $listThr['product_name'] ?>">
							                        <figure><img src="<?php echo 'assets/images/product/'.$listThr['image']; ?>" width="800" height="800" 
							                        alt="<?php echo $listThr['product_name'] ?>"></figure>
							                    </a>
							                    <div class="group-flash">
							                        <span class="flash-item bestseller-label">Manfacturer</span>
							                    </div>
							                    <div class="wrap-btn">
							                        <a href="product_details.php?slug=<?php echo $listThr['slug'] ?>" class="function-link">quick view</a>
							                    </div>
							                </div>
							                <div class="product-info">
							                    <a href="" class="product-name"><span><?php echo $listThr['product_name'] ?></span></a>
							                    <div class="wrap-price"><ins><p class="product-price">
							                        &#8358;<?php echo number_format($listThr['amount']); ?></p></ins> 
							                        <del><p class="product-price"><?php
							                            $num3= (40/100)*$listThr['amount'];
							                            $adding2 = $num3 + $listThr['amount']; ?>
							                            &#8358;<?php echo number_format($adding2) ?>
							                        </p></del>
							                    </div>
							                     <div class="wrap-btn">
                                                    <a href="handlers/registration/addit.php?slug=<?php echo $listThr['slug'] ?>&&action=<?php echo 'Compare' ?>" 
                                                    class="btn btn-compare">Compare</a>
                                                    <a href="handlers/registration/addit.php?slug=<?php echo $listThr['slug'] ?>&&list_id=<?php  echo $seewish['list_id']; ?>&&action=<?php echo 'Delete Wishlist' ?>" 
                                                    class="btn btn-wishlist" style="color: red">Remove </a>
                                                </div>
                                                <a href="product_details.php?slug=<?php echo $listThr['slug'] ?>" class="btn btn-danger btn-lg btn-block active"> Details</a>
							                </div>
							            </div><?php 
							        }
						        } ?>
						    </div>
						</div>
 						<!-- <ul class="product-list grid-products equal-container"><?php
                            foreach($product->getCusWishProduct($customer_id) as $seewish){
                                $slug = $seewish['slug'];
                                foreach($product->getSingleLoopProduct($slug) as $listShop){ ?>
                                    <li class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
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
                                                    class="btn btn-compare">Add To Compare</a>
                                                    <a href="handlers/registration/addit.php?slug=<?php echo $listShop['slug'] ?>&&list_id=<?php  echo $seewish['list_id']; ?>&&action=<?php echo 'Delete Wishlist' ?>" 
                                                    class="btn btn-wishlist" style="color: red">Remove </a>
                                                </div>
                                                <a href="product_details.php?slug=<?php echo $listShop['slug'] ?>" class="btn add-to-cart">More Details</a>
                                                
                                            </div>
                                        </div>
                                    </li><?php
                                } 
                            } ?>


                        </ul> -->

                    </div>

                    <?php 
                } ?>
            </div><!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
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

                
                <div class="widget mercado-widget widget-product">
                    <h2 class="widget-title">New Arrival </h2>
                    <div class="widget-content">
                        <ul class="products"><?php 
                            foreach($product->getAllProductByGenreList() as $listThr){?>
                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="product_details.php?slug=<?php echo $listThr['slug'] ?>" title="<?php echo $listThr['product_name'] ?>">
                                                <figure><img src="<?php echo "assets/images/product/".$listThr['image'] ?>" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="product_details.php?slug=<?php echo $listThr['slug'] ?>" title="<?php echo $listThr['product_name'] ?>"
                                                    class="product-name"><span><?php echo $listThr['product_name']; ?></span></a>
                                            <div class="wrap-price"><ins><p class="product-price" style="color: green">
                                                &#8358;<?php echo number_format($listThr['amount']); ?></p></ins> 
                                                <del><p class="product-price" style="color: red"><?php
                                                    $nu= (40/100)*$listThr['amount'];
                                                    $add = $nu + $listThr['amount']; ?>
                                                    
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

            </div><!--end sitebar-->

        </div><!--end row-->

    </div><!--end container-->

</main>
    
<?php require('footer.php'); ?>