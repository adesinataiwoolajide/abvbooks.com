<?php 
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once('../../connection/connection.php');
$all_purpose = new all_purpose($db);
$author = new Author;
$return = $_SERVER['HTTP_REFERER'];
try{
    if(isset($_GET['supplier_name'])){
        $email = $_SESSION['user_name'];
        $author_name = $_GET['supplier_name'];
        $author_id = $_GET['supplier_id'];
        
        if($author->deleteAuthor($author_id)){
            $action ="Deleted $author_name From the Supplier List";
            $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
            $_SESSION['success'] = "You Have Deleted $author_name From the Supplier List Successfully";
            $all_purpose->redirect($return);
        }else{
            $_SESSION['error'] = "Network Failure, Please Try Again Later";
            $all_purpose->redirect($return);
        }  
    }else{
        $_SESSION['error'] = "Please Click On The Trash Can To Delete The Supplier Details";
        $all_purpose->redirect($return);
    }
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>