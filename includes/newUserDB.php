<?php
include "includes/dbconnect.php";
$regsuccess=false;
$regfail=false;


if(isset($_POST['email'])) {
    if (isset($_POST['passwort'])) {
        $email = $_POST["email"];
        $password = $_POST["passwort"];
        $sql = "INSERT INTO users (email, password) VALUES ('" . $email . "', '" . $password . "');";
        $result = mysqli_query($pdo, $sql);

        if ($result) {
//            header('location: index.php');
            $regsuccess = true;
        } else {
            $regfail = true;
        }

    }
}


