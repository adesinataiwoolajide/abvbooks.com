<?php
session_start();
require_once("../../dev/autoload.php");

if($_POST){
    $customers = new Customers;
    if($customers->updateMemberShipType($_POST['cid'], $_POST['memberType'])){
        $_SESSION['success'] = "Update successful";
        $_SESSION['memberType'] = $_POST['memberType'];
        General::redirectTo($_SERVER['HTTP_REFERER']);
    }else{
        $_SESSION['error'] = "Unable to change your member type";
        General::redirectTo($_SERVER['HTTP_REFERER']);
    }		
}
?>