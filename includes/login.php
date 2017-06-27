<?php

// Einfacher Login

include "includes/dbconnect.php";
//values from index.php
session_start();
/*$ifError =false;
if(isset($_POST['email'])){
    if($_POST['email']=='max@mustermann.at'&& $_POST['password']=='123456'){
        $_SESSION['email']='max@mustermann.at';
        header('location: anwendung.php');
        exit;
    }else{
        $ifError = true;
    }
}*/

// Login - Versuch funktioniert leider nicht wie erwartet...


$ifError = false;


if(isset($_POST['email'])){

    $email = mysqli_real_escape_string($pdo, $_POST['email']);

    $plainTextPassword = $_POST['password'];

    $plainTextPassword = mysqli_real_escape_string($pdo, $plainTextPassword);



    $sql = "SELECT `usersID`,`password` FROM `users` WHERE `email` = '$email'";
    $result = mysqli_query($pdo, $sql);

    if(!$result) {
        echo mysqli_error($pdo);
    }

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $passwordFromDb = $row['password'];

        if(password_verify($plainTextPassword, $passwordFromDb)) {
            $_SESSION['login_user'] = $email;
            $_SESSION['login_userid'] = $row['userID'];

            header("location: anwendung.php");

        } else {
            $ifError = true;
        }




    } else {
        $ifError = true;
    }

}
