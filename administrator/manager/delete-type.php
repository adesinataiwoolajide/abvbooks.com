<?php 
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once('../../connection/connection.php');
$all_purpose = new all_purpose($db);
$type = new Type;
$return = $_SERVER['HTTP_REFERER'];
try{
    if(isset($_GET['type_name'])){
        $email = $_SESSION['user_name'];
        $type_name = $_GET['type_name'];
        $type_id = $_GET['type_id'];
       
        if($type->deleteProductType($type_id)){
            $action ="Deleted $type_name From to the Type List";
            $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
            $_SESSION['success'] = "You Have Deleted $type_name From The Product Types Successfully";
            $all_purpose->redirect($return);
        }else{
            $_SESSION['error'] = "Network Failure, Please Try Again Later";
            $all_purpose->redirect($return);
        }
         
    }else{
        $_SESSION['error'] = "Please Click On The Trash Icon To Delete The Product Type Details";
        $all_purpose->redirect($return);
    }
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>