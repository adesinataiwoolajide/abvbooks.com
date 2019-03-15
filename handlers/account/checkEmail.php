<?php
session_start();
require_once("../../dev/autoload.php");
include("../../config/config.php");
if($_POST){
	$user = new Account;
	$email = new Email;

	$userMail = General::sanitiseInput($_POST['email']);
	$user->getEmail($userMail);
	if($user->checkIfAlreadyRegistered() == 1){
		
		$email->addRecipient(General::sanitiseInput($_POST['email']));
		$email->getSubject("Password Reset Link");
		$sendEmail = $email->resetPasswordLink(General::sanitiseInput($_POST['email']), $baseUrl);
		if($sendEmail){
			$_SESSION['success'] = "Password reset link has been sent to your email";
			General::redirectTo("../../check-email.php");
		}else{
			$_SESSION['error'] = "Unable to send password reset link";
			General::redirectTo("../../check-email.php");			
		}
	}else{
		$_SESSION['error'] = "Invalid email address";
		General::redirectTo("../../check-email.php");
	}
}
?>