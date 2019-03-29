<?php 
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once('../../connection/connection.php');
$all_purpose = new all_purpose($db);
$category = new Category;
$return = $_SERVER['HTTP_REFERER'];
try{
    if(isset($_POST['edit-category'])){
        $email = $_SESSION['user_name'];
        $category_name = $all_purpose->sanitizeInput($_POST['category_name']);
        $category_id = $_POST['category_id'];
        $prev_name = $_POST['prev_name'];
       
        if($category->updateCategory($category_name, $category_id)){
            $action ="Updated The Category Name From $prev_name to $category_name";
            $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
            $_SESSION['success'] = "You Have Updated The Category Name From $prev_name to $category_name Successfully";
            $all_purpose->redirect('category.php');
            
        }else{
            $_SESSION['error'] = "Network Failure, Please Try Again Later";
            $all_purpose->redirect($return);
        }
        
    }else{
        $_SESSION['error'] = "Please Fill The Form Below To Update The Category Details";
        $all_purpose->redirect($return);
    }
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>