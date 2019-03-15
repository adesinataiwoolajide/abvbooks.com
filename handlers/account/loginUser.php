<?php
session_start();
require_once("../../dev/autoload.php");
if($_POST){
	$user = new Account;
	$shipping = new Shipping;

	$user->getEmail(General::sanitiseInput($_POST['email']));
	$user->getPassword(General::sanitiseInput($_POST['password']), "login");
	$return = $_POST['return'];
	// print_r($user->loginUser());
	// die();

	if($user->loginUser()){
		$shipping->getCustomerId($_SESSION['customerid']);
		
		if(count($shipping->getShippingAddress()) == 0){
			$_SESSION['success'] = "Login successfull but please save your shipping address";
			General::redirectTo("../../shipping-address.php");
		}elseif(isset($_SESSION['cart'])){
			$_SESSION['success'] = "Login successfull";
			General::redirectTo("../../cart.php");
		}else{
			$_SESSION['success'] = "Login successfull";
			General::redirectTo("../../index.php");
		}
		
	}else{
		$_SESSION['error'] = "Login failed. Incorrect Email or Password";
		General::redirectTo("../../login.php");		
	}
}
?>