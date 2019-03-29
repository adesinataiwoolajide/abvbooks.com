<?php 
session_start();
require_once("../../dev/autoload.php");
require_once("../../dev/general/all_purpose_class.php");
require_once('../../connection/connection.php');
$all_purpose = new all_purpose($db);
$type = new Type;
$genre = new Genre;
$return = $_SERVER['HTTP_REFERER'];
try{
    if(isset($_GET['sub_type_name'])){
        $email = $_SESSION['user_name'];
        $genre_name = $_GET['sub_type_name'];
        $genre_id = $_GET['sub_type_id'];
        
        if($genre->deleteGenre($genre_id)){
            $action ="Deleted $genre_name From the Sub Types List";
            $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
            $_SESSION['success'] = "You Have Deleted $genre_name Successfully";
            $all_purpose->redirect($return);
        }else{
            $_SESSION['error'] = "Network Failure, Please Try Again Later";
            $all_purpose->redirect($return);
        }
        
        
    }else{
        $_SESSION['error'] = "Please CLick On The trash Icon To Delete The Product Sub Type";
        $all_purpose->redirect($return);
    }
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>