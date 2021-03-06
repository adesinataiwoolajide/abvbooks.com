<?php
	require_once('../header.php');
    $author = new Author;
    $type = new Type;
    $genre = new Genre;
    $publisher = new Publisher;
    $category = new Category;
    $product = new Product;
    $order = new Order;
    $customer = new Customer;
    $total = count($order->getAllOrders());
	
?>
<div class="clearfix"></div>
	
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="view-order.php">View All Order</a></li>
                    
                    <li class="breadcrumb-item active" aria-current="page">List of Customer Orders</li>
                </ol>
            </div>
        </div>
       
        <div class="row">
	    	<div class="col-lg-12">
	          	<div class="card"><?php
	          		if($total==0){ ?>
                        <div class="card-header" align="center" style="color: red">
                            <i class="fa fa-table"></i> The Order List is Empty
						</div><?php 
					}else{ ?>
						
						<div class="card-header"><i class="fa fa-table"></i> List of Saved Products</div>
						<div class="card-body">
							<div class="table-responsive">
                                <table id="default-datatable" class="table table-bordered">
									<thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Customer</th>
                                            <th>E-Mail</th>
                                            <th> Order Number</th>
                                            <th>Payment Status</th>
                                            <th>Total Order</th>
										</tr>
									</thead>

									<tfoot>
										<tr>
                                            <th>S/N</th>
                                            <th>Customer</th>
                                            <th>E-Mail</th>
                                            <th> Order Number</th>
                                            <th>Payment Status</th>
                                            <th>Total Order</th>
										</tr>
									</tfoot>
									<tbody>
										<?php $number =1; 
										foreach($order->getAllOrders() as $listOrder) {
                                            $customer_id = $listOrder['customer_id'];
                                            $level = $customer->getAllSingleCustomer($customer_id);
											$order_id=$listOrder['order_id'] ?>
											<tr>
												<td><?php echo $number; ?>
                                                    <a href="view-order-details.php?order_number=<?php echo $order_id ?>" class=""><i class="fa fa-id-badge"></i></a>
                                                </td>
                                                <td><?php echo $level['full_name'] ?></td>
                                                <td><?php echo $level['user_name'] ?></td>
                                                <td><?php echo $order_id ?></td>
                                                <!-- <td><?php echo $listOrder['paystack_reference'] ?></td> -->
                                                <td><p style="color: green"> Paid</p></td>
                                                <!-- <td><?php echo $listOrder['order_status'] ?></td> -->
                                                <!-- <td>&#8358;<?php echo number_format($listOrder['subtotal']) ?></td>
                                                <td>&#8358;<?php echo number_format($listOrder['shipping_charge']) ?></td> -->
                                                <td>&#8358;<?php echo number_format($listOrder['amount']) ?></td>
											</tr><?php
											$number++; 
										}?>
									</tbody>
								
								</table>
							</div>
						</div><?php
					} ?>
              	</div>
            </div>
        </div>
        
    </div>
    <!-- End container-fluid-->
    
</div><!--End content-wrapper-->
         
        

<?php
	require_once('../footer.php');
?>