<?php
	require_once('../header.php');
	$weight = new Weight;
    $total = count($weight->getAllProductWeight());
    $weight_name = $_GET['weight_name'];
    $weight_id = $_GET['weight_id'];
    $details = $weight->getSingleBookWeight($weight_id);
?>
<div class="clearfix"></div>
	
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="edit-weight.php?weight_name=<?php echo $weight_name ?>&&weight_id=<?php echo $weight_id ?>">Edit Weight</a></li>
                    <li class="breadcrumb-item"><a href="weight.php">Add Weight</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Editing Saved Product Weight</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Edit Weight </div>
                    <div class="card-body">
                        <form action="update-weight.php" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group row ">
                                <div class="col-sm-6">
									<label for="input-6">Product Weight </label>
                                    <select class="form-control form-control-rounded" name="weight_name" id="" required onchange="showGenre(this.value)" required>>
                                    	<option value="<?php echo $weight_name ?>"><?php echo $weight_name ?></option>
                                    	<option value=""></option>
                                    	<?php for ($i = 0.1; $i <= 30; $i++) : ?>
											<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
										<?php endfor; ?>
                                    </select>
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>
                                <div class="col-sm-6">
                                	<label for="input-6">Weight Amount </label>
                                    <input type="number" class="form-control form-control-rounded" name="amount" required 
                                    placeholder="Enter The Amount" value="<?php echo $details['amount'] ?>">
                                    <span style="color: red">** This Field is Required **</span>     
                                </div> 
                                <input type="hidden" name="weight_id" value="<?php echo $weight_id ?>">
                                <input type="hidden" name="prev_name" value="<?php echo $weight_name ?>"> 
                                <div class="col-sm-12" align="center">
                                    <button type="submit" class="btn btn-success btn-lg btn-block" name="edit-weight">UPDATE THE PRODUCT WEIGHT </button>
                                </div>   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
	    	<div class="col-lg-12">
	          	<div class="card"><?php
	          		if($total==0){ ?>
                        <div class="card-header" align="center" style="color: red">
                            <i class="fa fa-table"></i> The List is Empty
						</div><?php 
					}else{ ?>
						
		            	<div class="card-header"><i class="fa fa-table"></i> List of Saved Product Weight</div>
	            		<div class="card-body">
	              			<div class="table-responsive">
	              				<table id="default-datatable" class="table table-bordered">
	              					<thead>
					                    <tr>
					                        <th>S/N</th>
					                        <th>Weight</th>
					                        <th>Amount</th>
											<!-- <th>Time Added</th> -->
					                    </tr>
					                </thead>

					                <tfoot>
					                    <tr>
											<th>S/N</th>
											<th>Weight</th>
					                        <th>Amount</th>
											<!-- <th>Time Added</th> -->
					                    </tr>
					                </tfoot>
					                <tbody>
					                	<?php $number =1; 
										foreach($weight->getAllProductWeight() as $listGenre) {
											$weightid = $listGenre['weight_id'];
											$weightname=$listGenre['weight_name']; ?>
											<tr>
												<td><?php echo $number; ?>
													<a href="delete-weight.php?weight_name=<?php echo $weightname ?>&&weight_id=<?php echo $weightid ?>" class="btn btn-danger" onclick="return(confirmToDelete());"><i class="fa fa-trash-o"></i></a>
													<a href="edit-weight.php?weight=<?php echo $weightname ?>&&weight=<?php echo $weightid ?>" class="btn btn-success" onclick="return(confirmToEdit());"><i class="fa fa-pencil"></i></a>
												</td>
												<td><?php echo $weightname ?></td>
												<td>&#8358;<?php echo number_format($listGenre['amount']); ?></td>
                                                
												<!-- <td><?php echo $listGenre['time_added'] ?></td> -->
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