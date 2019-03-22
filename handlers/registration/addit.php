<?php

	session_start();
	require_once("../../connection/connection.php");
	require_once("../../dev/autoload.php");
	require_once '../../dev/general/all_purpose_class.php';
	$returnUrl = $_SERVER['HTTP_REFERER'];
	$all_purpose = new all_purpose($db);
	$product = new Product;
	if(!isset($_SESSION['id'])){
		$_SESSION['error'] = "Please Login To Add/Register Your Wishlist/Compare";
		$all_purpose->redirect('../../login.php');
	}else{
		if(isset($_GET['slug']) AND ($_GET['action'])){
			$slug = $_GET['slug'];
			$customer_id = $_SESSION['reg_number'];
			$action = $_GET['action'];

			$ragzProduct = $product->getSingleProduct($slug);
			$product_name = $ragzProduct['product_name'];

			if(($action == "Delete Wishlist") OR($action == "Delete Compare")){
				$list_id = $_GET['list_id'];
				$db = Database::getInstance()->getConnection();
				$del = $db->prepare("DELETE FROM wishlist WHERE slug=:slug AND list_id=:list_id");
				$arr = array(':slug'=>$slug, ':list_id'=>$list_id);
				if(!empty($del->execute($arr))){
					$_SESSION['success'] = strtoupper("You Have Deleted $product_name From Your List Successfully");
					$all_purpose->redirect($returnUrl);
				}else{
					$_SESSION['error'] = strtoupper("Network Failure, Please Try Again Later");
					$all_purpose->redirect($returnUrl);
				}
			}

			$db = Database::getInstance()->getConnection();
			$check = $db->prepare("SELECT * FROM wishlist WHERE slug=:slug AND customer_id=:customer_id AND action=:action");
			$arrCheck = array(':slug'=>$slug, ':customer_id'=>$customer_id, ':action'=>$action);
			$check->execute($arrCheck);
			if($check->rowCount()>0){
				$_SESSION['error'] = strtoupper("You Have Added $product_name to Your $action List Before");
				$all_purpose->redirect($returnUrl);
			}else{

				$db = Database::getInstance()->getConnection();
				$insert= $db->prepare("INSERT INTO wishlist(customer_id, slug, action)VALUES(:customer_id, :slug, :action)");
				$arrInsert = array(':customer_id'=>$customer_id, ':slug'=>$slug, ':action'=>$action);
				if(!empty($insert->execute($arrInsert))){
					$_SESSION['success'] = strtoupper("You Have Added $product_name to Your $action List");
					$all_purpose->redirect($returnUrl);
				}else{
					$_SESSION['error'] = strtoupper("Error in Adding $product_name to $action List at the moment, Please Try Again Later");
					$all_purpose->redirect($returnUrl);
				}
			}
		}else{
			$_SESSION['error'] = strtoupper("Network Failure, Please Try Again Later");
			$all_purpose->redirect($returnUrl);
		}
	}
?>