<?php
	require_once('../header.php');
	$author = new Author;
	$total = count($author->getAllAuthor());
?>
<div class="clearfix"></div>
	
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="author.php">Add Author</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List of Saved Authors</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add New Author Details</div>
                    <div class="card-body">
                        <form action="process-author.php" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group row">
                                <div class="col-sm-12">
                                	<label for="input-12">Author Name </label>
                                    <input type="text" class="form-control form-control-rounded" name="author_name" required 
                                    placeholder="Enter The Author Name">
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>

                                <div class="col-sm-12" align="center">
                                    <button type="submit" class="btn btn-success btn-lg btn-block" name="add-author">ADD THE AUTHOR </button>
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
						
						<div class="card-header"><i class="fa fa-table"></i> List of Saved Authors</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="example" class="table table-bordered">
									<thead>
										<tr>
											<th>S/N</th>
											<th>Author Name</th>
											<th>Time Added</th>
										</tr>
									</thead>

									<tfoot>
										<tr>
											<th>S/N</th>
											<th>Author Name</th>
											<th>Time Added</th>
										</tr>
									</tfoot>
									<tbody>
										<?php $number =1; 
										foreach($author->getAllAuthor() as $listAuthor) {
											$author_id = $listAuthor['author_id'];
											$author_name=$listAuthor['author_name'] ?>
											<tr>
												<td><?php echo $number; ?>
													<a href="delete-author.php?author_name=<?php echo $author_name ?>&&author_id=<?php echo $author_id ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
													<a href="edit-author.php?author_name=<?php echo $author_name ?>&&author_id=<?php echo $author_id ?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
												</td>
												<td><?php echo $author_name ?></td>
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