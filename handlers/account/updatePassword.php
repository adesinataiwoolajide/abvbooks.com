<?php
session_start();
require_once("../../dev/autoload.php");
require_once("authenticate.php");
if($_POST){
	$user = new Account;
	$user->getCustomerId($_SESSION['customerid']);
	$user->getPassword(sanitiseInput($_POST['confirm']), "registration");

	if($user->updatePassword()){
		$_SESSION['success'] = "Password Updated";
		General::redirectTo("../../update-password.php");
	}else{
		$_SESSION['error'] = "Unable to update password. Please try again";
		General::redirectTo("../../update-password.php");
	}
}
?>
