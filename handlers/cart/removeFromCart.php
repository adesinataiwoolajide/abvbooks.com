<?php
session_start();
require_once("../../dev/autoload.php");
$returnUrl = $_SERVER['HTTP_REFERER'];
$sku = $_GET['sku'];
foreach($_SESSION['cart'] as $k => $v){
	if($k == $sku){
		unset($_SESSION['cart'][$k]);
	}
}

// if(count($_SESSION['count']) == 0){
// 	unset($_SESSION['cart']);
// }
$_SESSION['success'] = "Product removed from your shopping bag";
General::redirectTo($returnUrl);
?>