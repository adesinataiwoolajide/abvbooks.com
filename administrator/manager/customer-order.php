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
    $total = count($customer->getAllCustomer());
	
?>
<div class="clearfix"></div>
	
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="customer-order.php">View All Customer</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List of all Customer</li>
                </ol>
            </div>
        </div>
       
        <div class="row">
	    	<div class="col-lg-12">
	          	<div class="card"><?php
	          		if($total==0){ ?>
                        <div class="card-header" align="center" style="color: red">
                            <i class="fa fa-table"></i> The Customer List is Empty
						</div><?php 
					}else{ ?>
						
						<div class="card-header"><i class="fa fa-table"></i> List of Saved Products</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="example" class="table table-bordered">
									<thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Customer</th>
                                            <th>E-Mail</th>
                                            <th> Reg Number</th>
                                            <th>Asset</th>
                                            <th>Total Order</th>
                                            <th>Time Registered</th>
										</tr>
									</thead>

									<tfoot>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Customer</th>
                                            <th>E-Mail</th>
                                            <th> Reg Number</th>
                                            <th>Asset</th>
                                            <th>Total Order</th>
                                            <th>Time Registered</th>
										</tr>
									</tfoot>
									<tbody>
										<?php $number =1; 
										foreach($customer->getAllCustomer() as $level) {
                                            $customer_id = $level['reg_number'];
                                            
											//$order_id=$listOrder['order_id'] ?>
											<tr>
												<td><?php echo $number; ?>
                                                    <!-- <a href="customer_order_details.php?customer_number=<?php echo $customer_id ?>" class=""><i class="fa fa-id-badge"></i></a> -->
                                                </td>
                                                <td><?php echo $level['full_name'] ?></td>
                                                <td><?php echo $level['user_name'] ?></td>
                                                <td><?php echo $level['reg_number'] ?></td>
                                                <td>&#8358;<?php echo number_format($customer->getAllSingleCustomerOrderAsset($customer_id)) ?></td>
                                                <td><?php echo count($customer->getAllSingleCustomerOrder($customer_id)); ?></td>
                                                <td><?php echo $level['time_addes'] ?></td>
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