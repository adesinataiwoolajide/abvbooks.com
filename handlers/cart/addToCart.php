<?php
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once("../../connection/connection.php");
$all_purpose = new all_purpose($db);
$product = new Product;
$return = $_SERVER['HTTP_REFERER'];
    session_start();
    if(isset($_GET['slug'])){
		$slug = $_GET['slug'];
		$_SESSION['slug']  = $slug;
		$_SESSION['amount'] = $_GET['amount'];
		$productDetails = $product->getSingleProduct($slug);
		$_SESSION['quantity'] = $_GET['quantity'];

		$itemArray = array(
			$productDetails["slug"] => array(
				'slug' => $_SESSION['slug'],
				'name'=> $productDetails["product_name"], 
				'amount'=> $_SESSION['amount'],
				'quantity' => $_SESSION['quantity'] ,
			)
		);

		if(!empty($_SESSION['cart'])){
			
			if(in_array($slug, array_keys($_SESSION['cart']))){		
				foreach(($_SESSION['cart']) as $k => $v){
					
					if($_SESSION['cart'][$k]['slug'] == $productDetails['slug']){
						if($_SESSION['cart'][$k]['quantity'] == $_SESSION['quantity']){
							$_SESSION['cart'][$k]['quantity'] += 1 ;
						}else{
							$_SESSION['cart'][$k]['quantity'] += 0;
						}
					}
				}
			}else{
				$_SESSION["cart"] += $itemArray;	
			}
		}else{
			$_SESSION["cart"] = $itemArray;
		}
		$_SESSION['success'] = strtoupper(ucwords($productDetails["product_name"])." added to your shopping bag");
		$all_purpose->redirect($return);
	}else{
		$_SESSION['error'] = "Please Click On Your Preferred Product";
		$all_purpose->redirect($return);
	}












































 //    $sku = $_GET['sku'];
 //    $quantity = $_GET['quantity'];
 //    $amount = $_GET['amount'];

	// $productArray = array(
	// 	$_GET['sku'] => [
	//         'sku' => $_GET['sku'],
	//         'name' => $_GET['name'],
	//         'amount' => $_GET['amount'],
	//         'quantity' => $_GET['quantity'],
	//         //'size' => $_GET['quantity']
 //        ] 
 //   );

 //    if(!empty($_SESSION['cart'])){
			
	// 	if(in_array($sku, array_keys($_SESSION['cart']))){		
	// 		foreach(($_SESSION['cart']) as $k => $v){
	// 			if($_SESSION['cart'][$k]['sku'] == $sku){
	// 				if($_SESSION['cart'][$k]['sku'] == $sku){
	// 					$_SESSION['cart'][$k]['quantity'] += 1 ;
	// 					$_SESSION['total'] += $quantity * $amount;
	// 				}else{
	// 					$_SESSION['cart'][$k]['quantity'] += 0;
	// 					$_SESSION['total'] += 0 * $amount;
	// 				}
	// 			}
				
	// 		}
	// 	}else{
	// 		$_SESSION["cart"] += $productArray;	
	// 	}
	// }else{
	// 	$_SESSION["cart"] = $productArray;
	// }  
?>