<?php require('header.php'); 

    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
        $count = count($cart);
    }else{
        $count = 0;
    }
    if(!isset($_SESSION['id'])){ ?>
       
        <script>
            window.location=('login.php');
        </script><?php 
        $_SESSION['error'] = "Please Register Or Login into Your Account"; 
    }

    $reg_number = $_SESSION['reg_number'];
    $shippingDetails = $register->gettingShippinCustomerAddress($reg_number);
    $counting = count($shippingDetails);
?>
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="./" class="link">home</a></li>
            <li class="item-link"><span>login</span></li>
        </ul>
    </div>
    <div class="row">

        <div class=" main-content-area">
            <div class="wrap-login-item ">
                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                    <!-- register form -->
                    <?php 
                    if($counting > 0){
                        foreach ($shippingDetails as$getAddress ){ ?>
                            <div class="login-form form-item ">
                        
                                <form action="handlers/shipping/update-shipping-address.php" method="POST">
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Update Your shipping address below</h3>
                                        <h4 class="form-subtitle">Personal infomation</h4>
                                    </fieldset>
                                    <fieldset class="wrap-input ">
                                        <label for="frm-reg-fname">Full Name*</label>
                                        <input type="text" id="frm-reg-fname" value="<?php echo $_SESSION['name'] ?>" name="full_name" placeholder="Enter Your Full Name" readonly>
                                    </fieldset>
                                    <fieldset class="wrap-input ">
                                        <label for="frm-reg-fname">E-Mail*</label>
                                        <input type="text" id="frm-reg-fname" value="<?php echo $_SESSION['user_name'] ?>" name="full_name" placeholder="Enter Your Full Name" readonly>
                                    </fieldset>
                                    <fieldset class="wrap-input ">
                                        <label for="frm-reg-fname">Phone Number*</label>
                                        <input type="number" name="phone" id="frm-reg-pass" value="<?php echo $getAddress['phone'] ?>" class="form-control" required>
                                    </fieldset>
                                    
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-email">Opposite*</label>
                                        <input type="text" name="landmark" id="frm-reg-pass" value="<?php echo $getAddress['landmark'] ?>" class="form-control" required>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-pass">State *</label>
                                       
                                        <select class="form-control" id="frm-reg-fname" name="state" required>
                                            <option value="<?php echo $getAddress['state'] ?>"><?php echo $getAddress['state'] ?> </option>
                                            <option value=""></option><?php 
                                            $zone = $db->prepare("SELECT * FROM shipping_location_charge ORDER BY location ASC");
                                            $zone->execute(); 
                                            while($see_state = $zone->fetch()){ ?>
                                                <option value="<?php echo $see_state['location']; ?>"><?php echo $see_state['location']. " State"; ?></option><?php  
                                            } ?>
                                        </select>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-fname">Street Address *</label>
                                        <textarea class="form-control" name="address" placeholder="Confirm Password" required>
                                            <?php echo $getAddress['address'] ?>
                                        </textarea>
                                    </fieldset>
                                    
                                    <input type="hidden" name="customer_id" value="<?php echo $getAddress['customer_id'] ?>">
                                    <input type="submit" class="btn btn-sign" value="Update Your Account" name="update-address">
                                </form>
                            </div>
                            <?php 
                           
                        } 
                    }else{ ?>
                        <div class="login-form form-item">
                            <form action="handlers/shipping/add-shipping-address.php" method="POST">
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Register your shipping address below</h3>
                                    <h4 class="form-subtitle">Please Add Your Shipping Address Below</h4>
                                </fieldset>
                                <fieldset class="wrap-input ">
                                    <label for="frm-reg-fname">Full Name*</label>
                                    <input type="text" id="frm-reg-fname" value="<?php echo $_SESSION['name'] ?>" name="full_name" placeholder="Enter Your Full Name" readonly>
                                </fieldset>
                                <fieldset class="wrap-input ">
                                    <label for="frm-reg-fname">Phone Number*</label>
                                    <input type="text" id="frm-reg-fname" class="form-control" name="phone" placeholder="Enter Your Phone Number" required>
                                </fieldset>
                                
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-email">Opposite*</label>
                                    <input type="text" id="frm-reg-email" name="landmark" placeholder="Enter Your Landmark" required>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-fname">State*</label>
                                    <select  class="form-control" name="state" required>
                                        <option value="">-- Select Your State -- </option>
                                        <option value=""></option><?php 
                                        $zone = $db->prepare("SELECT * FROM shipping_location_charge ORDER BY location ASC");
                                        $zone->execute(); 
                                        while($see_state = $zone->fetch()){ ?>
                                            <option value="<?php echo $see_state['location']; ?>"><?php echo $see_state['location']. " State"; ?></option><?php  
                                        } ?>
                                    </select>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-fname">Street Address *</label>
                                    <textarea class="form-control" name="address" placeholder="Please Enter Your Street Address" required>      
                                    </textarea>
                                </fieldset>
                                <input type="submit" class="btn btn-sign" value="Add Shipping Address" name="add-address">
                            </form>
                        </div>
                        <?php 
                    }?> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   <div class=" main-content-area">

                    <div class="wrap-iten-in-cart">
                       

                        <div class="summary">
                            <div class="order-summary">
                                <h4 class="title-box">Order Summary</h4>
                                <p class="summary-info"><span class="title">Subtotal</span><b class="index">$512.00</b></p>
                                <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                                <p class="summary-info total-info "><span class="title">Total</span><b class="index">$512.00</b></p>
                            </div>
                            <div class="checkout-info">
                                
                                <a class="btn btn-checkout" href="check-out.php">Check out</a>
                                <a class="link-to-shop" href="list_shop.php">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                            
                        </div>
                    </div>

                    <div class="widget widget-our-services ">
                        <div class="widget-content">
                            <ul class="our-services">

                                <li class="service">
                                    <a class="link-to-service" href="#">
                                        <i class="fa fa-truck" aria-hidden="true"></i>
                                        <div class="right-content">
                                            <b class="title">Free Shipping</b>
                                            <span class="subtitle">On Order Over 20009</span>
                                            <p class="desc"></p>
                                        </div>
                                    </a>
                                </li>

                                <li class="service">
                                    <a class="link-to-service" href="#">
                                        <i class="fa fa-gift" aria-hidden="true"></i>
                                        <div class="right-content">
                                            <b class="title">Special Offer</b>
                                            <span class="subtitle">Get a gift!</span>
                                            <p class="desc">On Order Above 30000</p>
                                        </div>
                                    </a>
                                </li>

                                <li class="service">
                                    <a class="link-to-service" href="#">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        <div class="right-content">
                                            <b class="title">Order Return</b>
                                            <span class="subtitle">Return within 7 days</span>
                                            <p class="desc"></p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Categories widget-->
                </div><!--end sitebar-->
            </div>
        </div><!--end main products area-->

    </div><!--end row-->

</div><!--end container-->

</main>
<?php require('footer.php'); ?>