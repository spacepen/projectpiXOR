<?php
//values from index.php
session_start();
$ifError =false;
if(isset($_POST['email'])){
    if($_POST['email']=='max@mustermann'&& $_POST['password']=='test'){
        $_SESSION['email']='max@mustermann';
        header('location: anwendung.php');
        exit;
    }else{
        $ifError = true;
    }
}
?>