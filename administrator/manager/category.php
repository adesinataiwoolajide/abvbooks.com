<?php
	require_once('../header.php');
	$category = new Category;
	$totalcategory = count($category->getAllCategory());
?>
<div class="clearfix"></div>
	
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="category.php">Add Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List of Saved Product Categories</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add New Category </div>
                    <div class="card-body">
                        <form action="process-category.php" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group row ">
                                <div class="col-sm-12">
                                	<label for="input-12">Category Name </label>
                                    <input type="text" class="form-control form-control-rounded" name="category_name" required 
                                    placeholder="Enter The Category Name">
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>
                                
                                <div class="col-sm-12" align="center">
                                    <button type="submit" id="" class="btn btn-success btn-lg btn-block" role="status" name="add-category">ADD THE CATEGORY 
                                    </button>
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
	          		if($totalcategory==0){ ?>
                        <div class="card-header" align="center" style="color: red">
                            <i class="fa fa-table"></i> The List is Empty
						</div><?php 
					}else{ ?>
						
		            
		            	<div class="card-header"><i class="fa fa-table"></i> List of Saved Product Categories</div>
	            		<div class="card-body">
							<div class="table-responsive">
								<table id="default-datatable" class="table table-bordered">
	              					<thead>
					                    <tr>
					                        <th>S/N</th>
					                        <th>Category Name</th>
					                    </tr>
					                </thead>

					                <tfoot>
					                    <tr>
											<th>S/N</th>
											<th>Category Name</th>
					                    </tr>
					                </tfoot>
					                <tbody>
					                	<?php $number =1; 
										foreach($category->getAllCategory() as $listcategory) {
											$category_id = $listcategory['category_id'];
											$category_name=$listcategory['category_name']; ?>
											<tr>
												<td><?php echo $number; ?>
													<a href="delete-category.php?category_name=<?php echo $category_name ?>&&category_id=<?php echo $category_id ?>" class="btn btn-danger" onclick="return(confirmToDelete());"><i class="fa fa-trash-o"></i></a>
													<a href="edit-category.php?category_name=<?php echo $category_name ?>&&category_id=<?php echo $category_id ?>" class="btn btn-success" onclick="return(confirmToEdit());"><i class="fa fa-pencil"></i></a>
												</td>
												<td><?php echo $category_name ?></td>
												
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