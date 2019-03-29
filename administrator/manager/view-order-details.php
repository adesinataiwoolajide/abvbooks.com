<?php
	require_once('../header.php');
    $author = new Author;
    $type = new Type;
    $genre = new Genre;
    $publisher = new Publisher;
    $category = new Category;
    $product = new Product;
    $order = new Order;

    $orderId = $_GET['order_number'];
	$buy = $order->getOrderId($orderId);
   
?>
<div class="clearfix"></div>
	
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="view-order-details.php?order_number=<?php echo $orderId ?>">Order Details</a></li>
                    <li class="breadcrumb-item"><a href="view-order.php">View All Order</a></li>
                    
                    <li class="breadcrumb-item active" aria-current="page">List of Saved Products</li>
                </ol>
            </div>
        </div>
       
        <div class="row"><?php 
            foreach($order->getCustomerOrderDetails($orderId) as $list){
                $slug = $list['product_id'];
                $see = $product->getSingleProduct($slug); ?>
                <div class="col-lg-4">
                    <div class="card profile-card-2">
                        <div class="card-body border-top border-light">
                            <div class="media align-items-center">
                                <div>
                                    <div>
                                    <img src="<?php echo "../../assets/images/product/".$see['image'] ?>"class="skill-img" style="width: 100px; height: 100px;" alt="skill img">
                                </div>
                                </div>
                                <div class="media-body -left ml-4">
                                    <div class="progress-wrapper">
                                        <p><?php echo $see['product_name'] ?></p>
                                        <p style="color: black">Amount: ;<?php echo $amount= ($list['amount']) ?></p>
                                        <p>Quantity:  <?php echo $qua= ($list['quantity']) ?></p>
                                        <p>Total: &#8358;<?php $ans = ($amount * $qua); echo number_format($ans) ?></p>
                                    </div>                   
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div> <?php 
            } ?>
        </div>
        
    </div>
    <!-- End container-fluid-->
    
</div><!--End content-wrapper-->
         
        

<?php
	require_once('../footer.php');
?>