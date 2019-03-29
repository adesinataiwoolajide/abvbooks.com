<?php 
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once('../../connection/connection.php');
$all_purpose = new all_purpose($db);
$weight = new Weight;
$return = $_SERVER['HTTP_REFERER'];
try{
    if(isset($_GET['weight_name'])){
        $email = $_SESSION['user_name'];
        $weight_name = $_GET['weight_name'];
        $weight_id = $_GET['weight_id'];
       
        if($weight->deleteProductWeight($weight_id)){
            $action ="Deleted $weight_name From to the Weight List";
            $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
            $_SESSION['success'] = "You Have Deleted $weight_name From The Product Weights Successfully";
            $all_purpose->redirect($return);
        }else{
            $_SESSION['error'] = "Network Failure, Please Try Again Later";
            $all_purpose->redirect($return);
        }
         
    }else{
        $_SESSION['error'] = "Please Click On The Trash Icon To Delete The Product Weight Details";
        $all_purpose->redirect($return);
    }
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>