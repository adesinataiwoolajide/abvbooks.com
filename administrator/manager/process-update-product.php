<?php 
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once('../../connection/connection.php');
$all_purpose = new all_purpose($db);
$product = new Product;
$return = $_SERVER['HTTP_REFERER'];
try{
    $dir = "../assets/images/product/";
        
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext = pathinfo($file_name);
    $ext = $file_ext['extension'];
    $extensions= array("jpeg","jpg","png", "JPEG", "JPG", "PNG");
    
    
    if(isset($_POST['add-product'])){
        $email = $_SESSION['user_name'];
        $productname = $all_purpose->sanitizeInput($_POST['product_name']);
        $genre_id = $all_purpose->sanitizeInput($_POST['genre_id']);
        $category_id = $all_purpose->sanitizeInput($_POST['category_id']);
        $amount = $all_purpose->sanitizeInput($_POST['amount']);
        $quantity = $all_purpose->sanitizeInput($_POST['quantity']);
        $description = $all_purpose->sanitizeInput($_POST['description']);
        $edtion = $all_purpose->sanitizeInput($_POST['edition']);
        $publisher_id = $all_purpose->sanitizeInput($_POST['publisher_id']);
        $slu = Product::generateSlug($productname);
        $slug = $_POST['slug'];
        $product_name = strtoupper($productname);
        if($edtion == ""){
            $edition = "Null";
        }else{
            $edition = $edtion;
        }

        if(empty($file_name)){

        }else{
            if(!(in_array($ext,$extensions))){
                $_SESSION['error']="Image Extension not allowed, Please choose a JPEG or PNG file.";
                 $all_purpose->redirect($return);
            }
            if($file_size > 2097152){
                $_SESSION['error'] = 'File size must be not greater than 2 MB';
                 $all_purpose->redirect($return);
            }else{


            }
        }
        
        $move= move_uploaded_file($file_tmp, $dir.$file_name);
        $image = $file_name;

        if($product->createProduct($product_name, $slug, $image, $genre_id, $category_id, $amount, $quantity, $description, 
            $edition, $publisher_id)){

            if(count($product->checkDuplicateProductStock($product_name, $category_id, $genre_id, $publisher_id, $edition)) ==1){
                $come = $product->getsProductStock($product_name, $category_id, $genre_id, $publisher_id, $edition);
                $before = $come['quantity'];
                $new = $quantity;
                $total = $before+$new;

                //$deletePrev = $product->deletePrevProductStock($product_name, $category_id, $genre_id, $quantity, $publisher_id, $edition)
                $update =$product->updateProductStock($product_name, $total, $category_id, $genre_id, $publisher_id, $edition);

                $action = "Updated $product_name stock with $quantity quantity";
                $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
                $_SESSION['success'] = "You Have Added Product with the Product Name $product_name with the Product Number $slug Successfully";
                $all_purpose->redirect("view-products.php");

            }else{
                $add_stock = $product->addProductStock($product_name, $category_id, $genre_id, $quantity, $publisher_id, $edition);
                $action = "Added $product_name with $product_number to the stock list";
                $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
                $_SESSION['success'] = "You Have Added Product with the Product Name $productname with the Product Number $slug Successfully";
                $all_purpose->redirect("view-products.php");
                    
            }
            // if($product->createProduct($product_name, $slug, $image, $genre_id, $category_id, $amount, $quantity, $description, $edition, $publisher_id)){
            //     $action ="Added Product with the Product Name $productname with the Product Number $slug";
            //     $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
            //     $_SESSION['success'] = "You Have Added Product with the Product Name $productname with the Product Number $slug Successfully";
            //     $all_purpose->redirect($return);
        }else{
            $_SESSION['error'] = "Network Failure, Please Try Again Later";
            $all_purpose->redirect($return);
        }
        
        
    }else{
        $_SESSION['error'] = "Please Fill The Form Below To Add The Product Details";
        $all_purpose->redirect($return);
    }
    
}catch(PDOException $e){
    echo  $e->getMessage();
    $all_purpose->redirect($return);
}
?>