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
    

    if(isset($_POST['add-publisher'])){
        $email = $_SESSION['user_name'];
        $publisher_name = $all_purpose->sanitizeInput($_POST['publisher_name']);
        $publisher_id = $_POST['publisher_id'];
        $prev_name = $_POST['prev_name'];
        if(empty($file_name)){

            if($publisher->updatePublisherwithOutImage($publisher_id, $publisher_name, $publisher_logo)){
                $action ="Changed The Manufacturer Name from $prev_name to $publisher_name";
                $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
                $_SESSION['success'] = "You Have Changed The Manufacturer Name from $prev_name to $publisher_name Successfully";
                $all_purpose->redirect('manufacturer.php');
            }else{
                $_SESSION['error'] = "Network Failure, Please Try Again Later";
                $all_purpose->redirect($return);
            } 
        }else{
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
                $move= move_uploaded_file($file_tmp, $dir.$file_name);
                $publisher_logo = $file_name;
                if($publisher->updatePublisherwithImage($publisher_id, $publisher_name, $publisher_logo)){
                    $action="Changed The Manufacturer Name from $prev_name to $publisher_name and Changed The Manufacturer Logo";
                    $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
                    $_SESSION['success'] = "You Have Changed The Manufacturer Name from $prev_name to $publisher_name and Changed The Manufacturer Logo Successfully";
                    $all_purpose->redirect('manufacturer.php');
                }else{
                    $_SESSION['error'] = "Network Failure, Please Try Again Later";
                    $all_purpose->redirect($return);
                } 
            }
        }
    }else{
        $_SESSION['error'] = "Please Fill The Form Below To Update The Publisher Details";
        $all_purpose->redirect($return);
    }
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>