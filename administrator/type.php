<?php
	require_once('../header.php');
?>
<div class="clearfix"></div>
	
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="type.php">Add Type</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List of Saved Product Types</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add New Product Type </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group row ">
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-rounded" name="type_name" required 
                                    placeholder="Enter The Type Name">
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>

                                <div class="col-sm-3" align="center">
                                    <button type="submit" class="btn btn-success">ADD THE TYPE </button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
		    	<div class="col-lg-12">
		          	<div class="card">
		          		
                            <!-- <div class="card-header" align="center" style="color: red">
                                <i class="fa fa-table"></i> The List is Empty
			            	</div> -->

			            
			            	<div class="card-header"><i class="fa fa-table"></i> List of Saved Types</div>
		            		<div class="card-body">
		              			<div class="table-responsive">
		              				<table id="example" class="table table-bordered">
		              					<thead>
						                    <tr>
						                        <th>S/N</th>
						                        <th>Type Name</th>
												<th>Time Added</th>
						                    </tr>
						                </thead>

						                <tfoot>
						                    <tr>
												<th>S/N</th>
												<th>Type Name</th>
												<th>Time Added</th>
						                    </tr>
						                </tfoot>
						                <tbody>
						                	<?php $number =1; ?>
						                	
							                    <tr>
							                        <td>
							                        	<a href="" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
							                        	<a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a>
							                        </td>
							                        <td>Taiwo</td>
							                        
													<td></td>
							                    </tr><?php
							                    $number++; ?>
							                
						                </tbody>
						               
		              				</table>
		              			</div>
		              		</div>
		             	
	              	</div>
	            </div>
	        </div>
        
    </div>
    <!-- End container-fluid-->
    
</div><!--End content-wrapper-->
         
        

<?php
	require_once('../footer.php');
?>