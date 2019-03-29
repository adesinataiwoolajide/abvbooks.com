<?php
	require_once('../header.php');
	$type = new Type;
	$genre = new Genre;
	$total = count($type->getAllProductType());
	$totalGenre = count($genre->getAllGenre());
?>
<div class="clearfix"></div>
	
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="sub_types.php">Add Sub Types</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List of Saved Product Sub Types</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add New Sub Type </div>
                    <div class="card-body">
                        <form action="process-sub-type.php" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group row ">
                                <div class="col-sm-6">
                                	<label for="input-6">Sub Type Name </label>
                                    <input type="text" class="form-control form-control-rounded" name="genre_name" required 
                                    placeholder="Enter The Sub Type Name">
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>
                                <div class="col-sm-6">
                                	<label for="input-6">Type Name </label>
                                    <select class="form-control form-control-rounded" name="type_id" required>
                                    	<option value="">-- Select Type --</option>
                                    	<option value=""></option><?php
                                    	foreach ($type->getAllProductType() as $listType) { ?>
                                    		<option value="<?php echo $listType['type_id'] ?>">
                                    			<?php echo $listType['type_name'] ?>	
                                    		</option><?php
                                    	} ?>
                                    </select>
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>
                                <div class="col-sm-12" align="center">
                                    <button type="submit" class="btn btn-success btn-lg btn-block" name="add-genre">ADD THE SUB TYPE </button>
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
	          		if($totalGenre==0){ ?>
                        <div class="card-header" align="center" style="color: red">
                            <i class="fa fa-table"></i> The List is Empty
						</div><?php 
					}else{ ?>
						
		            
		            	<div class="card-header"><i class="fa fa-table"></i> List of Saved Sub Types</div>
	            		<div class="card-body">
	              			<div class="table-responsive">
	              				<table id="default-datatable" class="table table-bordered">
	              					<thead>
					                    <tr>
					                        <th>S/N</th>
					                        <th>Sub Type Name</th>
					                        <th>Type Name</th>
											<!-- <th>Time Added</th> -->
					                    </tr>
					                </thead>

					                <tfoot>
					                    <tr>
											<th>S/N</th>
											<th>Sub Type Name</th>
					                        <th>Type Name</th>
											<!-- <th>Time Added</th> -->
					                    </tr>
					                </tfoot>
					                <tbody>
					                	<?php $number =1; 
										foreach($genre->getAllGenre() as $listGenre) {
											$genre_id = $listGenre['genre_id'];
											$genre_name=$listGenre['genre_name']; ?>
											<tr>
												<td><?php echo $number; ?>
													<a href="delete_sub_types.php?sub_type_name=<?php echo $genre_name ?>&&sub_type_id=<?php echo $genre_id ?>" class="btn btn-danger" onclick="return(confirmToDelete());"><i class="fa fa-trash-o"></i></a>
													<a href="edit_sub_types.php?sub_type_name=<?php echo $genre_name ?>&&sub_type_id=<?php echo $genre_id ?>" class="btn btn-success" onclick="return(confirmToEdit());"><i class="fa fa-pencil"></i></a>
												</td>
												<td><?php echo $genre_name ?></td>
												<td>
													<?php $type_id = $listGenre['type_id']; 
													$details= $type->getSingleBookType($type_id);
													echo $details['type_name']; ?>
												</td>
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