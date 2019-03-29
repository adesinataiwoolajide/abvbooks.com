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
    if(isset($_POST['add-genre'])){
        $email = $_SESSION['user_name'];
        $genre_name = $all_purpose->sanitizeInput($_POST['genre_name']);
        $type_id = $all_purpose->sanitizeInput($_POST['type_id']);
        $totalGenre = count($genre->checkIfAlreadyAdded($genre_name));

        if($totalGenre>0){
            $_SESSION['error']= "You Have Added $genre_name To The Sub Types List Before";
            $all_purpose->redirect($return);
        }else{
            if($genre->createGenre($genre_name, $type_id)){
                $action ="Added $genre_name to the Sub Types List";
                $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
                $_SESSION['success'] = "You Have Added $genre_name Successfully";
                $all_purpose->redirect($return);
            }else{
                $_SESSION['error'] = "Network Failure, Please Try Again Later";
                $all_purpose->redirect($return);
            }
        }
        
    }else{
        $_SESSION['error'] = "Please Fill The Form Below To Add The Product Sub Type";
        $all_purpose->redirect($return);
    }
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>