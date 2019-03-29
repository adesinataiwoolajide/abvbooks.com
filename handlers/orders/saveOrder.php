<?php
session_start();
require_once("../../dev/autoload.php");
require_once("../../connection/connection.php");
require_once("../../vendor/autoload.php");
require_once '../../dev/general/all_purpose_class.php';
$all_purpose = new all_purpose($db);
if(!isset($_SESSION['id'])){ ?>
    <script>
        window.location=('login.php');
    </script><?php 
    $_SESSION['error'] = "Please Register Or Login into Your Account"; 
}
    $order = new Order;
    $payment = new Payment;
    $product = new Product;

    $_SESSION['paystackReference'] = bin2hex(random_bytes(10));
    $order->deleteOrders($_SESSION['transactionId']); // delete instance of this order
    $saveOrder = $order->saveOrder($_SESSION['reg_number'], $_SESSION['transactionId'], $_SESSION['paystackReference'], 1, 1, $_POST['subtotal'], $_POST['shipping_charge'], $_POST['total'], $_SESSION['slug']); //save order

    if($saveOrder){
        foreach($_SESSION['cart'] as $key){
            $order->getProductId($key['slug']);
            $order->getQuantity($key['quantity']);
            $order->getAmount($key['amount']);
            $order->saveOrderDetails($_SESSION['transactionId'], $key['slug'], $key['quantity'], $key['amount']);

            //REMOVE THE ORDER HERE
        }

        $_SESSION['orderAmount'] = $_POST['total'];
        $paystack = new Yabacon\Paystack('sk_live_bebb5ccba02a9200ff12f3544c8e23621e606431');
        try
        {
          $tranx = $paystack->transaction->initialize([
            'amount'=> $_POST['total'] * 100,       // in kobo
            'email'=> $_SESSION['user_name'],         // unique to customers
            'reference'=> $_SESSION['paystackReference'], // unique to transactions
          ]);
        } catch(\Yabacon\Paystack\Exception\ApiException $e){
            $_SESSION['error'] = "Unable to proceed with the transaction. Please try again";
            $all_purpose->redirect("../../check-out.php");        
        }
        $order->updateOrderWithPaystackReference($_SESSION['transactionId'], $tranx->data->reference);
        header('Location: ' . $tranx->data->authorization_url);    
    }else{
        $_SESSION['error'] = "Unable to proceed with the transaction. Please try again";
        $all_purpose->redirect("../../check-out.php");            
    }
?>