<?php 
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once('../../connection/connection.php');
$all_purpose = new all_purpose($db);
$category = new Category;
$return = $_SERVER['HTTP_REFERER'];
try{
    if(isset($_POST['add-category'])){
        $email = $_SESSION['user_name'];
        $category_name = $all_purpose->sanitizeInput($_POST['category_name']);
        $totalcategory = count($category->checkIfAlreadyAdded($category_name));

        if($totalcategory>0){
            $_SESSION['error']= "You Have Added $category_name  Before";
            $all_purpose->redirect($return);
        }else{
            if($category->createcategory($category_name)){
                $action ="Added $category_name to the Category List";
                $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
                $_SESSION['success'] = "You Have Added $category_name Successfully";
                $all_purpose->redirect($return);
            }else{
                $_SESSION['error'] = "Network Failure, Please Try Again Later";
                $all_purpose->redirect($return);
            }
        }
        
    }else{
        $_SESSION['error'] = "Please Fill The Form Below";
        $all_purpose->redirect($return);
    }
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>