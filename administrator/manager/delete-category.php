<?php 
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once('../../connection/connection.php');
$all_purpose = new all_purpose($db);
$category = new Category;
$return = $_SERVER['HTTP_REFERER'];
try{
    if(isset($_GET['category_name'])){
        $email = $_SESSION['user_name'];
        $category_name = $_GET['category_name'];
        $category_id = $_GET['category_id'];
        
        if($category->deleteCategory($category_id)){
            $action ="Deleted $category_name From The Category List";
            $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
            $_SESSION['success'] = "You Have Deleted $category_name From The Category List Successfully";
            $all_purpose->redirect($return);
        }else{
            $_SESSION['error'] = "Network Failure, Please Try Again Later";
            $all_purpose->redirect($return);
        }
        
    }else{
        $_SESSION['error'] = "Please Click On The trash Icon To Delete Category";
        $all_purpose->redirect($return);
    }
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>