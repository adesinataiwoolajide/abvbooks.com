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
        $genre_id = $_POST['genre_id'];
        $prev_name = $_POST['prev_name'];
        if($genre->updateGenre($genre_name, $genre_id, $type_id)){
            $action ="Updated Sub type Name From $prev_name to $genre_name";
            $his = $all_purpose->getUserDetailsandAddActivity($email, $action);
            $_SESSION['success'] = "Updated Sub type Name From $prev_name to $genre_name Successfully";
            $all_purpose->redirect('sub_types.php');
        }else{
            $_SESSION['error'] = "Network Failure, Please Try Again Later";
            $all_purpose->redirect($return);
        }
        
    }else{
        $_SESSION['error'] = "Please Fill The Form Below To Update The Product Sub Type";
        $all_purpose->redirect($return);
    }
}catch(PDOException $e){
    $_SESSION['error'] =  $e->getMessage();
    $all_purpose->redirect($return);
}
?>