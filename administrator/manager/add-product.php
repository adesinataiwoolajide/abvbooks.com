<?php
	require_once('../header.php');
	$category = new Category;
	$type = new Type;
	$genre = new Genre;
	$author = new Author;
	$publisher = new Publisher;
	$weight = new Weight;
?>
<div class="clearfix"></div>
	
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="add-product.php">Add Product</a></li>
                    <li class="breadcrumb-item"><a href="view-products.php">View Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Adding New Product</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add New Product </div>
                    <div class="card-body">
                        <form action="process-add-product.php" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group row ">
                                <div class="col-sm-6">
                                	<label for="input-6">Product Image </label>
                                    <input type="file" class="form-control form-control-rounded" name="image" multiple required 
                                    >
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>

                                <div class="col-sm-6">
                                	<label for="input-6">Product Name </label>
                                    <input type="text" class="form-control form-control-rounded" name="product_name" required 
                                    placeholder="Enter The Product Name">
                                    <span style="color: red">** This Field is Required **</span>     
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
                                	<label for="input-6">Product Amount </label>
                                    <input type="number" class="form-control form-control-rounded" name="amount" required 
                                    placeholder="Enter The Amount">
                                    <span style="color: red">** This Field is Required **</span>     
                                </div> 

								<div class="col-sm-6">
									<label for="input-6">Product Type </label>
                                    <select class="form-control form-control-rounded" name="type_id" id="" required onchange="showGenre(this.value)" required>
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

                                <div class="col-sm-6" id="txtHint2">
                                	<label for="input-6">Sub Type </label>
                                	<select class="form-control form-control-rounded" name="genre_id" id="" required>
                                		<option value="">-- Select Sub Type --</option>
                                	</select>
                                	<span style="color: green">** This Field is Autoload **</span>  
                                </div>

								<div class="col-sm-6">
									<label for="input-6">Product Weight </label>
                                    <select class="form-control form-control-rounded" name="weight_name" id="" required onchange="showAmount(this.value)" required>
                                    	<option value="">-- Select Weight --</option>
                                    	<option value=""></option>
                                    	<?php foreach($weight->getAllProductWeight() as $roll) { ?>
											<option value="<?php echo $roll['weight_id'] ?>"><?php echo $roll['weight_name']; ?></option>
										<?php } ?>
                                    </select>
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>
								
								<div class="col-sm-6" id="txtHint3">
                                	<label for="input-6">Weight Amount </label>
                                	<select class="form-control form-control-rounded" name="weight_id" required>
                                		<option value="">-- Select Amount --</option>
                                	</select>
                                	<span style="color: green">** This Field is Autoload **</span>  
                                </div>

								<div class="col-sm-6">
                                	<label for="input-6">Product Quantity</label>
                                    <input type="number" class="form-control form-control-rounded" name="quantity" required 
                                    placeholder="Enter The Quantity">
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>

                                <div class="col-sm-6">
                                	<label for="input-6">Product Edition</label>
                                    <input type="text" class="form-control form-control-rounded" name="edition" 
                                    placeholder="Enter The Edition">
                                    <span style="color: green">** This Field is Optional **</span>     
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
                                    	<option value="">-- Select Manufacturer --</option>
                                    	<option value=""></option><?php
                                    	foreach ($publisher->getAllPublisher() as $listType) { ?>
                                    		<option value="<?php echo $listType['publisher_id'] ?>">
                                    			<?php echo $listType['publisher_name'] ?>	
                                    		</option><?php
                                    	} ?>
                                    </select>
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>

                                 
                                <div class="col-sm-12">
                                	<label for="input-12">Product Description </label>
                                    <textarea class="form-control form-control-rounded" name="description" required 
                                    placeholder="Enter The Product Description"> </textarea>
                                    <span style="color: red">** This Field is Required **</span>     
                                </div>    
                    
                                <div class="col-sm-12" align="center">
                                    <button type="submit" class="btn btn-success btn-lg btn-block" name="add-product">ADD THE PRODUCT DETAILS</button>
                                </div>   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- End container-fluid-->
    
</div><!--End content-wrapper-->
         
<!-- <script>
	document.querySelector("#genre").addEventListener("change", (e) => {
		let value = e.target.value;
		let url = "loadsub.php?type_id=" +value;
		fetch(url)
		.then(function(response) {
			response.json().then(function(data) {
				parseData(data);
			});
		})
		.catch(function(err) {
			console.log('Fetch Error :-S', err);
		});					
	});

	function parseData(data){
		let subcategory = document.querySelector("#type");
		let option = "";
		for(let result of data){
			option += `<option value="${result.type_name}"> ${result.type_name} </option>`;
		}
		subcategory.innerHTML = option;
	}
</script>      
 -->
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

	function showAmount(str) {
		if (str == "") {
		    document.getElementById("txtHint3").innerHTML = "";
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
		            document.getElementById("txtHint3").innerHTML = this.responseText;
		        }
		    };
		    xmlhttp.open("GET","load_amount.php?weight_id="+str,true);
		    xmlhttp.send();
		}
	}
</script>
<?php
	require_once('../footer.php');
?>