<?php

include "includes/dbconnect.php";
//values from index.php
session_start();
$ifError =false;
if(isset($_POST['email'])){
    if($_POST['email']=='max@mustermann.at'&& $_POST['password']=='123456'){
        $_SESSION['email']='max@mustermann.at';
        header('location: anwendung.php');
        exit;
    }else{
        $ifError = true;
    }
}

// Login - Versuch
/*

if(isset($_POST['email'])){

    $email = mysqli_real_escape_string($pdo,$_POST['email']);
    $password = mysqli_real_escape_string($pdo,$_POST['password']);

    $sql = "SELECT userID FROM users WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($pdo, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    if($count == 1) {
        session_register("email");
        $_SESSION['login_user'] = $email;

        header("location: anwendung.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }

    if($_POST['email']==$email&& $_POST['password']==$password){
        $_SESSION['email']=$email;
        header('location: anwendung.php');
        exit;
    }else{
        $ifError = true;
    }
}
*/