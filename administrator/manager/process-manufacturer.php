<?php 
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once('../../connection/connection.php');
$all_purpose = new all_purpose($db);
$publisher = new Publisher;
$return = $_SERVER['HTTP_REFERER'];
try{
    $dir = "../assets/images/publisher/";
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext = pathinfo($file_name);
    $ext = $file_ext['extension'];
    $extensions= array("jpeg","jpg","png", "JPEG", "JPG", "PNG");
    
    if(!(in_array($ext,$extensions))){
        $_SESSION['error']="Image Extension not allowed, Please choose a JPEG or PNG file.";
        $all_purpose->redirect($return); 
    }
    if($file_size > 2097152){
        $_SESSION['error'] = 'File size must be not greater than 2 MB';
        $all_purpose->redirect($return); 
    }else{
        if(isset($_POST['add-publisher'])){
            
            $email = $_SESSION['user_name'];
            $publisher_name = $all_purpose->sanitizeInput($_POST['publisher_name']);
            $total = count($publisher->checkIfAlreadyAdded($publisher_name));

            if($total>0){
                $_SESSION['error']= "You Have Added $publisher_name Before";
                $all_purpose->redirect($return);
            }else{
                $move= move_uploaded_file($file_tmp, $dir.$file_name);
                $publisher_logo = $file_name;
                if($publisher->createPublisher($publisher_name, $publisher_logo)){
                    $action ="Added $publisher_name  to the Publisher List";
                    $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
                    $_SESSION['success'] = "You Have Added $publisher_name Successfully";
                    $all_purpose->redirect($return);
                }else{
                    $_SESSION['error'] = "Network Failure, Please Try Again Later";
                    $all_purpose->redirect($return);
                }
            }
            
        }else{
            $_SESSION['error'] = "Please Fill The Form Below To Add The Publisher Details";
            $all_purpose->redirect($return);
        }
    }
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>