<?php
	require_once('../header.php');
	$publisher = new Publisher;
	$total = count($publisher->getAllpublisher());
?>
<div class="clearfix"></div>
	
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="manufacturer.php">Add Manufacturer</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List of Saved Manufacturer</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add New Manufacturer Details</div>
                    <div class="card-body">
                        <form action="process-manufacturer.php" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group row ">
                                <div class="col-sm-6">
                                	<label for="input-6">Manufacturer Name </label>
                                    <input type="text" class="form-control form-control-rounded" name="publisher_name" required 
                                    placeholder="Enter The Manufacturer Name">
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>
                                <div class="col-sm-6">
                                	<label for="input-6">Manufacturer Logo </label>
                                    <input type="file" class="form-control form-control-rounded" name="image" required>
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>

                                <div class="col-sm-12" align="center">
                                    <button type="submit" class="btn btn-success btn-lg btn-block" name="add-publisher">ADD THE MANUFACTURER </button>
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

			            
			            	<div class="card-header"><i class="fa fa-table"></i> List of Saved Manufacturers</div>
		            		<div class="card-body">
		              			<div class="table-responsive">
									<table id="default-datatable" class="table table-bordered">
		              					<thead>
						                    <tr>
						                        <th>S/N</th>
						                        <th>Manufacturer Name</th>
												<th>Manufacturer Logo</th>
												<th>Time Added</th>
						                    </tr>
						                </thead>

						                <tfoot>
						                    <tr>
												<th>S/N</th>
												<th>Manufacturer Name</th>
												<th>Manufacturer Logo</th>
												<th>Time Added</th>
						                    </tr>
						                </tfoot>
						                <tbody>
						                	<?php $number =1; 
											foreach($publisher->getAllPublisher() as $listPublisher) {
												$publisher_id = $listPublisher['publisher_id'];
												$publisher_name=$listPublisher['publisher_name'] ?>
												<tr>
													<td><?php echo $number; ?>
														<a href="delete-manufacturer.php?manufacturer_name=<?php echo $publisher_name ?>&&manufacturer_id=<?php echo $publisher_id ?>" class="btn btn-danger" onclick="return(confirmToDelete());"><i class="fa fa-trash-o"></i></a>
														<a href="edit-manufacturer.php?manufacturer_name=<?php echo $publisher_name ?>&&manufacturer_id=<?php echo $publisher_id ?>" class="btn btn-success" onclick="return(confirmToEdit());"><i class="fa fa-pencil"></i></a>
													</td>
													<td><img src="<?php echo "../assets/images/publisher/".$listPublisher['publisher_logo'] ?>" style="width: 70px; height: 50px;" alt="<?php echo $publisher_name ?>"></td>
													<td><?php echo $publisher_name ?></td>
													<td><?php echo $listPublisher['created_at'] ?></td>
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