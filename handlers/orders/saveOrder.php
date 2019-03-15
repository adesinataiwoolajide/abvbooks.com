<?php
session_start();
require_once("../../dev/autoload.php");
require_once("../../vendor/autoload.php");
require_once("../account/authenticate.php");
$order = new Order;
$payment = new Payment;

$_SESSION['paystackReference'] = bin2hex(random_bytes(10));
$order->deleteOrders($_SESSION['transactionId']); // delete instance of this order
$saveOrder = $order->saveOrder($_SESSION['customerid'], $_SESSION['transactionId'], $_SESSION['paystackReference'], 0, 0, $_POST['subtotal'], $_POST['shipping_charge'], $_POST['discount_percent'], $_POST['discount_value'], $_POST['total'], $_POST['wght'], $_POST['subscription']); //save order



if($saveOrder){
    foreach($_SESSION['cart'] as $key){
        $order->getProductId($key['code']);
        $order->getQuantity($key['quantity']);
        $order->getAmount($key['price']);
        $order->saveOrderDetails($_SESSION['transactionId'], $key['code'], $key['quantity'], $key['price']);
    }

    $_SESSION['orderAmount'] = $_POST['total'];
    $paystack = new Yabacon\Paystack('sk_test_483ce8535dad2c223ce439f44dfb75db683aa029');
    try
    {
      $tranx = $paystack->transaction->initialize([
        'amount'=> $_POST['total'] * 100,       // in kobo
        'email'=> $_SESSION['email'],         // unique to customers
        'reference'=> $_SESSION['paystackReference'], // unique to transactions
      ]);
    } catch(\Yabacon\Paystack\Exception\ApiException $e){
        $_SESSION['error'] = "Unable to proceed with the transaction. Please try again";
        General::redirectTo("../../checkout.php");        
    }
    $order->updateOrderWithPaystackReference($_SESSION['transactionId'], $tranx->data->reference);
    header('Location: ' . $tranx->data->authorization_url);    
}else{
    $_SESSION['error'] = "Unable to proceed with the transaction. Please try again";
    General::redirectTo("../../checkout.php");            
}
?>