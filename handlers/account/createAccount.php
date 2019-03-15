<?php
session_start();
require_once("../../dev/autoload.php");
if($_POST){
	$shipping = new Shipping;
	$user = new Account;
	$user->getName(General::sanitiseInput($_POST['name']));
	$user->getEmail(General::sanitiseInput($_POST['email']));
	$user->getCustomerId(General::generateRandomHash(10));
	$user->getPassword(General::sanitiseInput($_POST['confirm']), "registration");

	if($user->checkIfAlreadyRegistered() == 1){
		$_SESSION['error'] = "Email has been used to register before";
		General::redirectTo("../../register.php");
		die();
	}

	if($user->createUserAccount()){

		//login user after registration
		$user->getEmail(General::sanitiseInput($_POST['email']));
		$user->getPassword(General::sanitiseInput($_POST['confirm']), "login");
		if($user->loginUser()){
			$_SESSION['success'] = "Account registration successfull. Please add your shipping address below";
			// General::redirectTo("../../shipping-address.php");			
			General::redirectTo("../../membership-form.php");		
		}else{
			$_SESSION['success'] = "Account registration successfull.";
			General::redirectTo("../../cart.php");						
		}
	}else{
		$_SESSION['error'] = "Account registration failed. Please try again";
		General::redirectTo("../../register.php");		
	}
}
?>