<?php 
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once('../../connection/connection.php');
$all_purpose = new all_purpose($db);
$weight = new Weight;
$return = $_SERVER['HTTP_REFERER'];
try{
    if(isset($_POST['edit-weight'])){
        $email = $_SESSION['user_name'];
        $weight_name = $all_purpose->sanitizeInput($_POST['weight_name']);
        $amount = $all_purpose->sanitizeInput($_POST['amount']);
        $weight_id = $_POST['weight_id'];
        $prev_name = $_POST['prev_name'];

        if($weight->updateProductWeight($weight_name, $amount, $weight_id)){
            $action ="Updated The Weight Details From $prev_name to $weight_name";
            $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
            $_SESSION['success'] = "You Have Updated The Weight Details From $prev_name to $weight_name Successfully";
            $all_purpose->redirect('weight.php');
        }else{
            $_SESSION['error'] = "Network Failure, Please Try Again Later";
            $all_purpose->redirect($return);
        }
          
    }else{
        $_SESSION['error'] = "Please Fill The Form Below To Update The Product Weight";
        $all_purpose->redirect($return);
    }
}catch(PDOException $e){
   echo  $e->getMessage();
    $all_purpose->redirect($return);
}
?>