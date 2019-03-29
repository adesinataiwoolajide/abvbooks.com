<?php 
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once('../../connection/connection.php');
$all_purpose = new all_purpose($db);
$type = new Type;
$return = $_SERVER['HTTP_REFERER'];
try{
    if(isset($_POST['update-type'])){
        $email = $_SESSION['user_name'];
        $type_name = $all_purpose->sanitizeInput($_POST['type_name']);
        $type_id = $_POST['type_id'];
        $prev_name = $_POST['type_name'];
        
        if($type->updateProductType($type_id, $type_name)){
            $action ="Updated The Type Name From $prev_name to $type_name";
            $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
            $_SESSION['success'] = "You Have Updated The Type Name From $prev_name to $type_name Successfully";
            $all_purpose->redirect('type.php');
        }else{
            $_SESSION['error'] = "Network Failure, Please Try Again Later";
            $all_purpose->redirect($return);
        }
        
    }else{
        $_SESSION['error'] = "Please Fill The Form Below To Update The Product Type Details";
        $all_purpose->redirect($return);
    }
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>