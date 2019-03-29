<?php 
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once('../../connection/connection.php');
$all_purpose = new all_purpose($db);
$type = new Type;
$return = $_SERVER['HTTP_REFERER'];
try{
    if(isset($_POST['add-type'])){
        $email = $_SESSION['user_name'];
        $type_name = $all_purpose->sanitizeInput($_POST['type_name']);
        $total = count($type->checkIfAlreadyAdded($type_name));

        if($total>0){
            $_SESSION['error']= "You Have Added $type_name Book Product Before";
            $all_purpose->redirect($return);
        }else{
            if($type->createProductType($type_name)){
                $action ="Added $type_name  to the Type List";
                $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
                $_SESSION['success'] = "You Have Added $type_name to The Product Types Successfully";
                $all_purpose->redirect($return);
            }else{
                $_SESSION['error'] = "Network Failure, Please Try Again Later";
                $all_purpose->redirect($return);
            }
        }
        
    }else{
        $_SESSION['error'] = "Please Fill The Form Below To Add The Product Type Details";
        $all_purpose->redirect($return);
    }
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>