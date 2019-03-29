<?php
	require_once('../header.php');
	$type = new Type;
	$genre = new Genre;
	$total = count($type->getAllProductType());
	$totalGenre = count($genre->getAllGenre());
	$genre_name = $_GET['sub_type_name'];
	$genre_id = $_GET['sub_type_id'];
	$deta = $genre->getSingleGenreType($genre_id);
	$type_id = $deta['type_id'];
	$tyname = $type->getSingleBookType($type_id);
?>
<div class="clearfix"></div>
	
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="edit_sub_types.php?sub_type_name=<?php echo $genre_name ?>&&sub_type_id=<?php echo $genre_id ?>">Edit Sub Types</a></li>
                    <li class="breadcrumb-item"><a href="sub_types.php">Add Sub Types</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Editing Saved Product Sub Types</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add New Sub type </div>
                    <div class="card-body">
                        <form action="update_sub_types.php" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group row ">
                                <div class="col-sm-6">
                                	<label for="input-6">Sub Type Name </label>
                                    <input type="text" class="form-control form-control-rounded" name="genre_name" required 
                                    placeholder="Enter The Sub Type Name" value="<?php echo $genre_name ?>">
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>
                                <div class="col-sm-6">
                                	<label for="input-6">Type Name </label>
                                    <select class="form-control form-control-rounded" name="type_id" required>

                                    	<option value="<?php echo $type_id ?>"><?php echo $tyname['type_name'] ?></option>
                                    	<option value=""></option><?php
                                    	foreach ($type->getAllProductType() as $listType) { ?>
                                    		<option value="<?php echo $listType['type_id'] ?>">
                                    			<?php echo $listType['type_name'] ?>	
                                    		</option><?php
                                    	} ?>
                                    </select>
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>
                                <input type="hidden" name="prev_name" value="<?php echo $genre_name ?>">
                                <input type="hidden" name="genre_id" value="<?php echo $genre_id ?>">
                                <div class="col-sm-12" align="center">
                                    <button type="submit" class="btn btn-success btn-lg btn-block" name="add-genre">UPDATE THE SUB TYPE </button>
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
											<<th>Sub Type Name</th>
					                        <th>Type Name</th>
											<!-- <th>Time Added</th> -->
					                    </tr>
					                </tfoot>
					                <tbody>
					                	<?php $number =1; 
										foreach($genre->getAllGenre() as $listGenre) {
											$genreid = $listGenre['genre_id'];
											$genrename=$listGenre['genre_name']; ?>
											<tr>
												<td><?php echo $number; ?>
													<a href="delete_sub_types.php?sub_type_name=<?php echo $genrename ?>&&sub_type_id=<?php echo $genreid ?>" class="btn btn-danger" onclick="return(confirmToDelete());"><i class="fa fa-trash-o"></i></a>
													<a href="edit_sub_types.php?sub_type_name=<?php echo $genrename ?>&&sub_type_id=<?php echo $genreid ?>" class="btn btn-success" onclick="return(confirmToEdit());"><i class="fa fa-pencil"></i></a>
												</td>
												<td><?php echo $genrename ?></td>
												<td>
													<?php $typeid = $listGenre['type_id']; 
													$details= $type->getSingleBookTypes($typeid);
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