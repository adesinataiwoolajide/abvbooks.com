<?php
session_start();
require_once("../../dev/autoload.php");
include("../../config/config.php");
if($_POST){
	$account = new Account;
	$account->getEmail(General::sanitiseInput($_POST['email']));
	$account->getPassword(General::sanitiseInput($_POST['confirm']), "registration");
	if($account->resetPassword()){
		$_SESSION['success'] = "Password reset successfull. Please login below";
		General::redirectTo("../../login.php");
	}else{
		$_SESSION['error'] = "Password reset failed. Please try again";
		General::redirectTo("../../check-email.php");		
	}
}
?>