<?php
	require_once('../header.php');
    $author = new Author;
    $type = new Type;
    $genre = new Genre;
    $publisher = new Publisher;
    $category = new Category;
    $product = new Product;

    $slug = $_GET['slug'];
    $details = $product->getSingleProduct($slug);
	
?>
<div class="clearfix"></div>
	
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="view-product-details.php?slug=<?php echo $slug ?>">View Product Details</a></li>
                    <li class="breadcrumb-item"><a href="view-products.php">View Product</a></li>
                    <li class="breadcrumb-item"><a href="add-product.php">Add Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List of Saved Products</li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-4">
                <div class="card profile-card-2">
                    
                    <div class="card-body border-top border-light">
                        <div class="media align-items-center">
                            <div>
                                <img src="<?php echo "../../assets/images/product/".$details['image'] ?>" class="skill-img" alt="skill img">
                            </div>
                            <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>HTML5 <span class="float-right">65%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar gradient-blooker" style="width:65%"></div>
                                    </div>
                                </div>                   
                            </div>
                        </div>
                        <hr>
                        <div class="media align-items-center">
                            <div><img src="<?php echo "../../assets/images/product/".$details['image'] ?>" class="skill-img" alt="skill img"></div>
                            <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>Bootstrap 4 <span class="float-right">50%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar gradient-purpink" style="width:50%"></div>
                                    </div>
                                </div>                   
                            </div>
                        </div>
                        <hr>
                        <div class="media align-items-center">
                            <div><img src="<?php echo "../../assets/images/product/".$details['image'] ?>" class="skill-img" alt="skill img"></div>
                            <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>AngularJS <span class="float-right">70%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar gradient-ibiza" style="width:70%"></div>
                                    </div>
                                </div>                   
                            </div>
                        </div>
                        <hr>
                        <div class="media align-items-center">
                            <div><img src="<?php echo "../../assets/images/product/".$details['image'] ?>" class="skill-img" alt="skill img"></div>
                                <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>React JS <span class="float-right">35%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar gradient-scooter" style="width:35%"></div>
                                    </div>
                                </div>                   
                            </div>
                        </div>
                  
                    </div>
                </div>
                <div class="card profile-card-2">
                    
                    <div class="card-body border-top border-light">
                        <div class="media align-items-center">
                            <div>
                                <img src="<?php echo "../../assets/images/product/".$details['image'] ?>" class="skill-img" alt="skill img">
                            </div>
                            <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>HTML5 <span class="float-right">65%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar gradient-blooker" style="width:65%"></div>
                                    </div>
                                </div>                   
                            </div>
                        </div>
                        <hr>
                        <div class="media align-items-center">
                            <div><img src="<?php echo "../../assets/images/product/".$details['image'] ?>" class="skill-img" alt="skill img"></div>
                            <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>Bootstrap 4 <span class="float-right">50%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar gradient-purpink" style="width:50%"></div>
                                    </div>
                                </div>                   
                            </div>
                        </div>
                        <hr>
                        <div class="media align-items-center">
                            <div><img src="<?php echo "../../assets/images/product/".$details['image'] ?>" class="skill-img" alt="skill img"></div>
                            <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>AngularJS <span class="float-right">70%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar gradient-ibiza" style="width:70%"></div>
                                    </div>
                                </div>                   
                            </div>
                        </div>
                        <hr>
                        <div class="media align-items-center">
                            <div><img src="<?php echo "../../assets/images/product/".$details['image'] ?>" class="skill-img" alt="skill img"></div>
                                <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>React JS <span class="float-right">35%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar gradient-scooter" style="width:35%"></div>
                                    </div>
                                </div>                   
                            </div>
                        </div>
                  
                    </div>
                </div>

            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-list"></i> <span class="hidden-xs">Stock and Orders</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                        </li>
                    </ul>
                    <div class="tab-content p-3">
                        <div class="tab-pane active" id="profile">
                            
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Product Details</h5>
                                    <div class="table-responsive">
                                    <table class="table table-hover table-responsive">
                                        <tbody>                                    
                                            <tr>
                                                <td>Product Name</td  > 
                                                <td><?php echo $details['product_name'] ?></td>
                                            </tr>
                                        </tbody>
                                        <tbody>                                    
                                            <tr>
                                                <td>Category</td >  
                                                <td><?php echo $details['product_name'] ?></td>
                                            </tr>
                                        </tbody>
                                        <tbody>                                    
                                            <tr>
                                                <td>Type</td  > 
                                                <td><?php echo $details['product_name'] ?></td>
                                            </tr>
                                        </tbody>
                                        <tbody>                                    
                                            <tr>
                                                <td>Genre</td >  
                                                <td><?php echo $details['product_name'] ?></td>
                                            </tr>
                                        </tbody>
                                        <tbody>                                    
                                            <tr>
                                                <td>Amount</td  >
                                                <td><?php echo $details['amount'] ?></td>
                                            </tr>
                                        </tbody>
                                        <tbody>                                    
                                            <tr>
                                                <td>Quantity</td>   
                                                <td><?php echo $details['quantity'] ?></td>
                                            </tr>
                                        </tbody>
                                        <tbody>                                    
                                            <tr>
                                                <td>Manufacturer</td >  
                                                <td><?php echo $details['product_name'] ?></td>
                                            </tr>
                                        </tbody>
                                        <tbody>                                    
                                            <tr>
                                                <td>Description</td >  
                                                <td><?php echo $details['description'] ?></td>
                                            </tr>
                                        </tbody>

                                        
                                    </table>
                                </div>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <div class="tab-pane" id="messages">
                            <div class="row">
                                <?php 
                                $product_name = $details['product_name'];
                                $category_id = $details['category_id'];
                                $publisher_id = $details['publisher_id'];
                                $edition = $details['edition'];
                                $stock = $product->getProductSingleStock($product_name, $publisher_id, $category_id); ?>
                                <div class="col-12 col-lg-6 col-xl-4">
                                    <div class="card gradient-army">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body">
                                                    <span class="text-white">Total in Stock</span>
                                                    <h3 class="text-white"><?php echo $add = $stock['quantity']; ?></h3>
                                                </div>
                                                <div class="w-icon">
                                                    <i class="ti-marker text-white"></i>
                                                </div>
                                            </div>
                                            <div id="widget-chart-4"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-xl-4">
                                    <div class="card gradient-army">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body">
                                                    <span class="text-white">Total Assets</span>
                                                    <h3 class="text-white"><?php echo number_format($add*$details['amount']); ?></h3>
                                                </div>
                                                <div class="w-icon">
                                                    <i class="ti-marker text-white"></i>
                                                </div>
                                            </div>
                                            <div id="widget-chart-4"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-xl-4">
                                    <div class="card gradient-army">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body">
                                                    <span class="text-white">Total Order</span>
                                                    <h3 class="text-white">0</h3>
                                                </div>
                                                <div class="w-icon">
                                                    <i class="ti-marker text-white"></i>
                                                </div>
                                            </div>
                                            <div id="widget-chart-4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <div class="alert-icon">
                                    <i class="icon-info"></i>
                                </div>
                                <div class="alert-message"><?php 
                                    $product_name = $details['product_name'];
                                    $category_id = $details['category_id'];
                                    $publisher_id = $details['publisher_id'];
                                    $edition = $details['edition'];
                                    $stock = $product->getProductSingleStock($product_name, $publisher_id, $category_id); ?>
                                    <span><strong>Total Product: !</strong> <?php echo $add = $stock['quantity'] ?>.</span>
                                </div>
                            </div>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <div class="alert-icon">
                                    <i class="icon-info"></i>
                                </div>
                                <div class="alert-message">
                                    
                                    <span><strong>Total Asset: !</strong> <?php echo $add * $details['amount'] ?>.</span>
                                </div>
                            </div>
                            
                        </div>
                        <div class="tab-pane" id="edit">
                            <form action="process-update-product.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row ">
                                    <div class="col-sm-6">
                                        <label for="input-6">Product Image </label>
                                        <input type="file" class="form-control form-control-rounded" name="image" 
                                        >
                                        <span style="color: red">** This Field is Optional **</span>     
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="input-6">Product Name </label>
                                        <input type="text" class="form-control form-control-rounded" name="product_name" required 
                                        placeholder="Enter The Product Name" value="<?php echo $details['product_name']; ?>">
                                        <span style="color: red">** This Field is Required **</span>     
                                    </div>

                                    
                                    <div class="col-sm-6">
                                        <label for="input-6">Product Type </label>
                                        <select class="form-control form-control-rounded" name="type_id" id="" required onchange="showGenre(this.value)" required>>
                                            <?php $genre_id = $details['genre_id'];
                                            $see = $genre->getSingleGenreType($genre_id);
                                            $type_id = $see['type_id'];
                                            $name = $type->getSingleBookType($type_id);
                                            $type_name = $name['type_name'];
                                            
                                            
                                            ?>
                                            <option value="<?php echo $type_id ?>"><?php echo $type_name ?></option>
                                            <option value=""></option><?php
                                            foreach ($type->getAllProductType() as $listType) { ?>
                                                <option value="<?php echo $listType['type_id'] ?>" selected>
                                                    <?php echo $listType['type_name'] ?>	
                                                </option><?php
                                            } ?>
                                        </select>
                                        <span style="color: red">** This Field is Required **</span>     
                                    </div>

                                    <div class="col-sm-6" id="txtHint2">
                                        <label for="input-6">Genre Name </label>
                                        <select class="form-control form-control-rounded" name="genre_id" id="" required>
                                            <option value="<?php echo $see['genre_id'] ?>"><?php echo $see['genre_name'] ?></option>
                                        </select>
                                        <span style="color: green">** This Field is Autoload **</span>  
                                    </div>
                                    

                                    <div class="col-sm-6">
                                        <label for="input-6">Category Name </label>
                                        <select class="form-control form-control-rounded" name="category_id" required>
                                            <option value="">-- Select Category --</option>
                                            <option value=""></option><?php
                                            foreach ($category->getAllCategory() as $listType) { ?>
                                                <option value="<?php echo $listType['category_id'] ?>">
                                                    <?php echo $listType['category_name'] ?>	
                                                </option><?php
                                            } ?>
                                        </select>
                                        <span style="color: red">** This Field is Required **</span>     
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="input-6">Supplier Name </label>
                                        <select class="form-control form-control-rounded" name="author_id" required>
                                            <option value="">-- Select Author --</option>
                                            <option value=""></option><?php
                                            foreach ($author->getAllAuthor() as $listType) { ?>
                                                <option value="<?php echo $listType['author_id'] ?>">
                                                    <?php echo $listType['author_name'] ?>	
                                                </option><?php
                                            } ?>
                                        </select>
                                        <span style="color: red">** This Field is Required **</span>     
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="input-6">Manufacturer Name </label>
                                        <select class="form-control form-control-rounded" name="publisher_id" required>
                                            <option value="">-- Select Publisher --</option>
                                            <option value=""></option><?php
                                            foreach ($publisher->getAllPublisher() as $listType) { ?>
                                                <option value="<?php echo $listType['publisher_id'] ?>">
                                                    <?php echo $listType['publisher_name'] ?>	
                                                </option><?php
                                            } ?>
                                        </select>
                                        <span style="color: red">** This Field is Required **</span>     
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="input-6">Product Quantity</label>
                                        <input type="number" class="form-control form-control-rounded" name="quantity" required 
                                        placeholder="Enter The Quantity" value="<?php echo $details['quantity']; ?>">
                                        <span style="color: red">** This Field is Required **</span>     
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="input-6">Product Amount </label>
                                        <input type="number" class="form-control form-control-rounded" name="amount" required 
                                        placeholder="Enter The Amount" value="<?php echo $details['amount']; ?>">
                                        <span style="color: red">** This Field is Required **</span>     
                                    </div> 
                                    <div class="col-sm-6">
                                        <label for="input-6">Product Edition</label>
                                        <input type="text" class="form-control form-control-rounded" name="edition" 
                                        placeholder="Enter The Edition" value="<?php echo $details['edition']; ?>">
                                        <span style="color: green">** This Field is Optional **</span>     
                                    </div>     
                                    <div class="col-sm-12">
                                        <label for="input-12">Product Description </label>
                                        <textarea class="form-control form-control-rounded" name="description" required 
                                        placeholder="Enter The Product Description"><?php echo $details['description'] ?> </textarea>
                                        <span style="color: red">** This Field is Required **</span>     
                                    </div>    
                                    <input type="hidden" name="slug" value="<?php echo $slug ?>">
                                    <input type="hidden" name="stock_id" value="<?php echo $stock_id ?>">
                 
                                    <div class="col-sm-12" align="center">
                                        <button type="submit" class="btn btn-success btn-lg btn-block" name="add-product">UPDATE THE PRODUCT DETAILS</button>
                                    </div>   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    </div>
    <!-- End container-fluid-->
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <script>
	function showUser(str) {
		if (str == "") {
		    document.getElementById("txtHint").innerHTML = "";
		    return;
		} else { 
		    if (window.XMLHttpRequest) {
		        // code for IE7+, Firefox, Chrome, Opera, Safari
		        xmlhttp = new XMLHttpRequest();
		    } else {
		        // code for IE6, IE5
		        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		    }
		    xmlhttp.onreadystatechange = function() {
		        if (this.readyState == 4 && this.status == 200) {
		            document.getElementById("txtHint").innerHTML = this.responseText;
		        }
		    };
		    xmlhttp.open("GET","loadsub.php?q="+str,true);
		    xmlhttp.send();
		}
	}
</script>

<script>
	function showGenre(str) {
		if (str == "") {
		    document.getElementById("txtHint2").innerHTML = "";
		    return;
		} else { 
		    if (window.XMLHttpRequest) {
		        // code for IE7+, Firefox, Chrome, Opera, Safari
		        xmlhttp = new XMLHttpRequest();
		    } else {
		        // code for IE6, IE5
		        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		    }
		    xmlhttp.onreadystatechange = function() {
		        if (this.readyState == 4 && this.status == 200) {
		            document.getElementById("txtHint2").innerHTML = this.responseText;
		        }
		    };
		    xmlhttp.open("GET","load_new.php?genre_id="+str,true);
		    xmlhttp.send();
		}
	}
</script>

<?php
	require_once('../footer.php');
?>