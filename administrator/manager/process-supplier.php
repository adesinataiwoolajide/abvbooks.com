<?php 
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once('../../connection/connection.php');
$all_purpose = new all_purpose($db);
$author = new Author;
$return = $_SERVER['HTTP_REFERER'];
try{
    if(isset($_POST['add-author'])){
        $email = $_SESSION['user_name'];
        $author_name = $all_purpose->sanitizeInput($_POST['author_name']);
        $total = count($author->checkIfAlreadyAdded($author_name));

        if($total>0){
            $_SESSION['error']= "You Have Added $author_name Before";
            $all_purpose->redirect($return);
        }else{
            if($author->createAuthor($author_name)){
                $action ="Added $author_name  to the Supplier List";
                $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
                $_SESSION['success'] = "You Have Added $author_name Successfully";
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