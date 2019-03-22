<?php require('header.php');
	if(!isset($_SESSION['id'])){ ?>
        <script>
            window.location=('login.php');
        </script><?php 
        $_SESSION['error'] = "Please Register Or Login into Your Account"; 
    }

    if(!isset($_SESSION['cart'])){ ?>
    	<script>
            window.location=('./');
        </script><?php
        $_SESSION['error'] = "Your Shopping Cart is Empty"; 

    } 
    $reg_number = $_SESSION['reg_number'];
    $shippingDetails = $register->gettingShippinCustomerAddress($reg_number);
    $counting = count($shippingDetails); ?>
<body class=" checkout page ">
    <main id="main" class="main-site">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="./" class="link">home</a></li>
                    <li class="item-link"><span>check out</span></li>
                </ul>
            </div>
            <div class=" main-content-area">

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    
                    <div class="summary summary-checkout">
                        <p align="center">Please Preview Your Orders Below</p>
                        <?php 
                        if($counting > 0){ 
                            $cart = $_SESSION['cart'];
                            $count = count($cart);
                            $reg_number = $_SESSION['reg_number'];
                            $shipLocation = $register->getShippinCusgAddress($reg_number); 
                            $state = $shipLocation['state']; 
                            $shipAmount = $register->getShippinLocationMoney($state); 
                            $shippingFee = $shipAmount['charge']; 
                            $total = array(); ?> <br><br>
                            <form action="handlers/orders/saveOrder.php" method="post" id="self">
                                <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
                                    <script src='https://js.paystack.co/v1/inline.js'></script>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                
                                                <th>Product Image</th>
                                                <th>Quantity</th>
                                                <th>Product Name</th>
                                                <th>Amount</th>
                                                <th>Total Price</th>
                                            </tr>
                                        </thead>
                                        <tbody><?php
                                            foreach($_SESSION['cart'] as $item){
                                                $slug = $item['slug'];
                                                $details = $product->getSingleProduct($slug); 
                                                $cal = $item['amount'] * $item['quantity'];
                                                array_push($total, $cal);  ?>
                                                <tr>
                                                    <td>
                                                        <figure>
                                                            <img src="<?php echo "assets/images/product/".$details['image'] ?>" alt="" style="width: 50px; height: 50px">
                                                        </figure>
                                                    </td>
                                                    <td><?php echo $quantity = $item['quantity']; ?><br>  </td>
                                                    <td><?php echo ucwords($item['name']);?></td>
                                                    <td>&#8358;<?php echo number_format($item['amount']);?></td>
                                                    <td><?php  echo "&#8358;".number_format($item['amount'] * $quantity);?></td>
                                                </tr><?php 
                                            } ?>
                                            <tr>
                                                <td colspan="5"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span style="text-align: right; display: block;"><b>SUBTOTAL</b></span></td>
                                                <td>&#8358;<?php echo number_format(array_sum($total)+0) ?></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span style="text-align: right; display: block;"><b>SHIPPING CHARGES:</b></span></td>
                                                <td>&#8358;<?php echo number_format($shippingFee); ?></td>
                                            </tr>                                       

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span style="text-align: right; display: block;"><b>TOTAL</b></span></td>
                                                <td>&#8358;<?php echo number_format(array_sum($total)+$shippingFee);?></td>
                                            </tr> 
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>                                                   
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span style="text-align: right; display: block;"><b>TRANSACTION ID:</b></span></td>
                                                <td> <?php echo $_SESSION['transactionId'];?></td>
                                            </tr>                           
                                        </tbody>
                                    </table>
                                </div>
                                <input type="hidden" name="total" value="<?php echo $over = array_sum($total)+$shippingFee; ?>"  >
                                <input type="hidden" name="subtotal" value="<?php echo array_sum($total)+0 ?>"  >
                                <input type="hidden" name="shipping_charge" id="shipping" value="<?php echo $shippingFee; ?>">
                                <input type="hidden" name="email" id="email" value="<?php echo $_SESSION['user_name']; ?>">
                                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Pay Online" />
                            </form><?php
                        }else{ ?>
                            <h3><p style="color: red" align="center">No products in your cart</p></h3><?php 
                        } ?>
                    </div>
                </div>
               
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="wrap-login-item ">
                        <div class="summary summary-checkout"><?php 
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
                                                <textarea class="form-control" name="address" placeholder="Confirm Password" required><?php echo $getAddress['address'] ?>
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
                    </div>
                </div>
               
                <</div></div>
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">Most Viewed Products</h3>
                    <div class="wrap-products">
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >                       
                            <?php 
                            foreach($product->getAllProductByGenre() as $listOne){ ?>
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="product_details.php?slug=<?php echo $listOne['slug']; ?>" title="<?php echo $listOne['product_name'] ?>">
                                            <figure><img src="<?php echo 'assets/images/product/'.$listOne['image']; ?>" width="800" height="800" alt="<?php echo $listOne['product_name'] ?>"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item sale-label">sale</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="product_details.php?slug=<?php echo $listOne['slug'] ?>" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="product_details.php?slug=<?php echo $listOne['slug'] ?>" class="product-name"><span
                                        ><?php echo $listOne['product_name'] ?></span></a>
                                        <div class="wrap-price"><ins><p class="product-price" style="color: green">
                                            &#8358;<?php echo number_format($listOne['amount']); ?></p></ins> 
                                            <del><p class="product-price" style="color: red">><?php
                                                $num3= (40/100)*$listOne['amount'];
                                                $adding2 = $num3 + $listOne['amount']; ?>
                                                
                                                &#8358;<?php echo number_format($adding2) ?>
                                            </p></del>
                                        </div>
                                    </div>
                                </div><?php 
                            } ?>

                            
                        </div>
                    </div><!--End wrap-products-->
                </div>

            </div><!--end main content area-->
        </div><!--end container-->

    </main>

<?php require('footer.php'); ?>