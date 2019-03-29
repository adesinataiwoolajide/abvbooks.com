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
        $author_id = $_POST['author_id'];
        $prev_name = $_POST['prev_name'];

        if($author->updateAuthor($author_id, $author_name)){
            $action ="Changed The Supplier Name From $prev_name tp $author_name";
            $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
            $_SESSION['success'] = "You Have Changed The Supplier Name From $prev_name tp $author_name Successfully";
            $all_purpose->redirect('supplier.php');
        }else{
            $_SESSION['error'] = "Network Failure, Please Try Again Later";
            $all_purpose->redirect($return);
        }
        
    }else{
        $_SESSION['error'] = "Please Fill The Form Below To Update The Supplier Details";
        $all_purpose->redirect($return);
    }
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>\