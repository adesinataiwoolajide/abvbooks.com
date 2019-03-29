<?php
	require_once('../header.php');
	$author = new Author;
	$total = count($author->getAllAuthor());
	$author_name = $_GET['supplier_name'];
	$author_id = $_GET['supplier_id'];
?>
<div class="clearfix"></div>
	
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="edit-supplier.php?supplier_name=<?php echo $author_name ?>&&supplier_id=<?php echo $author_id ?>">Edit Supplier</a></li>
                    <li class="breadcrumb-item"><a href="supplier.php">Add Supplier</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List of Saved Supplier</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Edit The Supplier Details</div>
                    <div class="card-body">
                        <form action="update-supplier.php" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group row">
                                <div class="col-sm-12">
                                	<label for="input-12">Supplier Name </label>
                                    <input type="text" class="form-control form-control-rounded" name="author_name" required 
                                    placeholder="Enter The Supplier Name" value="<?php echo $author_name ?>" value="<?php echo $author_name ?>">
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>
                                <input type="hidden" name="author_id" value="<?php echo $author_id ?>">
                                <input type="hidden" name="prev_name" value="<?php echo $author_name ?>">

                                <div class="col-sm-12" align="center">
                                    <button type="submit" class="btn btn-success btn-lg btn-block" name="add-author">UPDATE THE SUPPLIER </button>
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
						
						<div class="card-header"><i class="fa fa-table"></i> List of Saved Suppliers</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="example" class="table table-bordered">
									<thead>
										<tr>
											<th>S/N</th>
											<th>Supplier Name</th>
											<th>Time Added</th>
										</tr>
									</thead>

									<tfoot>
										<tr>
											<th>S/N</th>
											<th>Suppliers Name</th>
											<th>Time Added</th>
										</tr>
									</tfoot>
									<tbody>
										<?php $number =1; 
										foreach($author->getAllAuthor() as $listAuthor) {
											$authorid = $listAuthor['author_id'];
											$authorname=$listAuthor['author_name'] ?>
											<tr>
												<td><?php echo $number; ?>
													<a href="delete-supplier.php?supplier_name=<?php echo $authorname ?>&&supplier_id=<?php echo $authorid ?>" class="btn btn-danger" onclick="return(confirmToDelete());"><i class="fa fa-trash-o"></i></a>
													<a href="edit-supplier.php?supplier_name=<?php echo $authorname ?>&&supplier_id=<?php echo $authorid ?>" class="btn btn-success" onclick="return(confirmToEdit());"><i class="fa fa-pencil"></i></a>
												</td>
												<td><?php echo $authorname ?></td>
												<td><?php echo $listAuthor['created'] ?></td>
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