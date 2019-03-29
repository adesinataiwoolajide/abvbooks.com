<?php 
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once('../../connection/connection.php');
$all_purpose = new all_purpose($db);
$publisher = new Publisher;
$return = $_SERVER['HTTP_REFERER'];
try{
   
    if(isset($_GET['manufacturer_name'])){
        
        $email = $_SESSION['user_name'];
        $publisher_name = $_GET['manufacturer_name'];
        $publisher_id = $_GET['manufacturer_id'];
        if($publisher->deletePublisher($publisher_id)){
            $action ="Deleted $publisher_name From the Manufacturer List";
            $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
            $_SESSION['success'] = "You Have Deleted $publisher_name Successfully";
            $all_purpose->redirect($return);
        }else{
            $_SESSION['error'] = "Network Failure, Please Try Again Later";
            $all_purpose->redirect($return);
        }
        
    }else{
        $_SESSION['error'] = "Please Click on The Trash Icon To Delete The Manufacturer Details";
        $all_purpose->redirect($return);
    }
    
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>