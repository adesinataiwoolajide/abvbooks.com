<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	  <meta name="description" content=""/>
	  <meta name="author" content=""/>
	  <title>Book Stores</title>
	  <!--favicon-->
	  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	  <!-- Bootstrap core CSS-->
	  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
	  <!-- animate CSS-->
	  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
	  <!-- Icons CSS-->
	  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
	  <!-- Custom Style-->
	  <link href="assets/css/app-style.css" rel="stylesheet"/>
	  <link rel="stylesheet" type="text/css" href="assets/Toast/css/Toast.min.css">
  
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">

	   <div class="card-authentication2 mx-auto my-5">
	    <div class="card-group">
	    	<div class="card mb-0">
	    	   <div class="bg-signin2"></div>
	    		<div class="card-img-overlay rounded-left my-5">
                 <h2 class="text-white">ABV</h2>
                 <h1 class="text-white">Books</h1>
                 <h2><p class="card-text text-white pt-3">and Stationaries.</p></h2>
             </div>
	    	</div>

	    	<div class="card mb-0 ">
	    		<div class="card-body">
	    			<div class="card-content p-3">
	    				<div class="text-center">
					 		<img src="assets/images/logo-icon.png" alt="logo icon">
					 	</div>
					 <div class="card-title text-uppercase text-center py-3">Sign In</div>
					   <form action="process-login.php" method="POST">
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							   <label for="exampleInputUsername" class="sr-only">Username</label>
								 <input type="text" id="exampleInputUsername" class="form-control" placeholder="Username" name="email">
								 <div class="form-control-position">
									<i class="icon-user"></i>
								</div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputPassword" class="sr-only">Password</label>
							  <input type="password" id="exampleInputPassword" class="form-control" placeholder="Password" name="password">
							  <div class="form-control-position">
								  <i class="icon-lock"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-row mr-0 ml-0">
						  <div class="form-group col-6">
							  <div class="icheck-material-primary">
				               <input type="checkbox" id="user-checkbox" checked="" />
				               <label for="user-checkbox">Remember me</label>
							 </div>
							</div>
							
						</div>
						<button type="submit" class="btn btn-primary btn-block waves-effect waves-light" name="login">Sign In</button>
						 
					</form>
				 </div>
				</div>
	    	</div>
	     </div>
	    </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
  
   </div>
  <!--end color cwitcher-->
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <script src="assets/Toast/js/Toast.min.js"></script><?php 
  if(isset($_SESSION['success'])){
        $message = $_SESSION['success'];?>
        <script type="text/javascript">
              new Toast({ message: '<?php echo $message; ?>', type: 'success' });
        </script><?php 
        unset($_SESSION['success']);
    }
    if(isset($_SESSION['error'])){
        $message = $_SESSION['error'];?>
    
        <script type="text/javascript">
              new Toast({ message: '<?php echo $message; ?>', type: 'danger' });
        </script><?php 
        unset($_SESSION['error']);
    }  ?>
  
</body>

</html>
