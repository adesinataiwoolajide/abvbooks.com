<?php 
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once('../../connection/connection.php');
$all_purpose = new all_purpose($db);
$weight = new Weight;
$return = $_SERVER['HTTP_REFERER'];
try{
    if(isset($_POST['add-weight'])){
        $email = $_SESSION['user_name'];
        $weight_name = $all_purpose->sanitizeInput($_POST['weight_name']);
        $amount = $all_purpose->sanitizeInput($_POST['amount']);
        $totalWeight = count($weight->checkIfAlreadyExist($weight_name));

        if($totalWeight>0){
            $_SESSION['error']= "You Have Added $weight_name To The List Before";
            $all_purpose->redirect($return);
        }else{
            if($weight->createProductWeight($weight_name, $amount)){
                $action ="Added $weight_name with amount $amount to the List";
                $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
                $_SESSION['success'] = "You Have Added $weight_name with amount $amount to the List Successfully";
                $all_purpose->redirect($return);
            }else{
                $_SESSION['error'] = "Network Failure, Please Try Again Later";
                $all_purpose->redirect($return);
            }
        }
        
    }else{
        $_SESSION['error'] = "Please Fill The Form Below To Add The Product Weight";
        $all_purpose->redirect($return);
    }
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>