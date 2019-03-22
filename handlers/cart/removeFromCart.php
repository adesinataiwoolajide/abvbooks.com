<?php
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
$all_purpose = new all_purpose($db);
$returnUrl = $_SERVER['HTTP_REFERER'];
$slug = $_GET['slug'];
	foreach($_SESSION['cart'] as $k => $v){
		if($k == $slug){
			unset($_SESSION['cart'][$k]);
		}
	}

$_SESSION['success'] = "Product removed from your shopping list successfully";
$all_purpose->redirect($returnUrl);
?>