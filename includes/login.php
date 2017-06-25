<?php
//values from index.php
session_start();
$ifError =false;
if(isset($_POST['email'])){
    if($_POST['email']=='peter'&& $_POST['password']=='geheim'){
        $_SESSION['email']='peter';
        header('location: anwendung.php');
        exit;
    }else{
        $ifError = true;
    }
}
?>