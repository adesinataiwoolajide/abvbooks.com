<?php
session_start();
require_once("../../dev/autoload.php");

if($_POST){
        $customers = new Customers;
        $id = $_SESSION['customerid'];
      	$memb = trim($_POST['memb']);

      	$save = $customers->addMembershipData($memb);
      	if($save) {
      		$_SESSION['success'] = "Application successful";
      		General::redirectTo("../../views-member.php");

      	}


					
					
}


?>