<?php
	require_once('../header.php');
	$category = new Category;
	$totalcategory = count($category->getAllCategory());
	$category_id = $_GET['category_id'];
	$category_name = $_GET['category_name'];
?>
<div class="clearfix"></div>
	
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="edit-category.php?category_name=<?php echo $category_name ?>&&category_id=<?php echo $category_id ?>">Edit Category</a></li>
                    <li class="breadcrumb-item"><a href="category.php">Add Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Editing Saved Product Categories</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Update The Category Details</div>
                    <div class="card-body">
                        <form action="update-category.php" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group row ">
                                <div class="col-sm-12">
                                	<label for="input-12">Category Name </label>
                                    <input type="text" class="form-control form-control-rounded" name="category_name" required 
                                    placeholder="Enter The Category Name" value="<?php echo $category_name ?>">
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>
                                <input type="hidden" name="category_id" value="<?php echo $category_id ?>">
                                <input type="hidden" name="prev_name" value="<?php echo $category_name ?>">
                                
                                <div class="col-sm-12" align="center">
                                    <button type="submit" id="" class="btn btn-success btn-lg btn-block" role="status" name="edit-category">UPDATE THE CATEGORY 
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
											<<th>Category Name</th>
					                    </tr>
					                </tfoot>
					                <tbody>
					                	<?php $number =1; 
										foreach($category->getAllCategory() as $listcategory) {
											$categoryid = $listcategory['category_id'];
											$categoryname=$listcategory['category_name']; ?>
											<tr>
												<td><?php echo $number; ?>
													<a href="delete-category.php?category_name=<?php echo $categoryname ?>&&category_id=<?php echo $categoryid ?>" class="btn btn-danger" onclick="return(confirmToDelete());"><i class="fa fa-trash-o"></i></a>
													<a href="edit-category.php?category_name=<?php echo $categoryname ?>&&category_id=<?php echo $categoryid ?>" class="btn btn-success" onclick="return(confirmToEdit());"><i class="fa fa-pencil"></i></a>
												</td>
												<td><?php echo $categoryname ?></td>
												
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
<!-- <script>       
	$(':submit').click(function () {
		$(this).attr('value', 'Please wait...');
		$(this).attr('disabled', 'true');
	}); 
</script>  -->

<script>
	$(function()
	{
		$("input[type='submit']").one('click',function(e){

		   if(($("input[type='text']").val())!=''){
			   $('#theform').submit();
			   $("input[type='submit']").val('Please wait....');
			     e.preventDefault();
		   }else{
		     alert('empty input');
		   }
	 });
	});

	$('form').submit(function(){
    $('input[type=submit]', this).attr('disabled', 'disabled');
});
</script>   

<?php
	require_once('../footer.php');
?>