<?php
include "includes/dbconnect.php";
$regsuccess=false;
$regfail=false;
$passfail=false;


if(isset($_POST['email'])) {
    if (isset($_POST['passwort'])) {
        $email = $_POST["email"];
        $password = $_POST["passwort"];
        $password2 = $_POST["passwort2"];
        if ($password != $password2) {
            $passfail = true;
        } else {
            $hash = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO users (email, password) VALUES ('" . $email . "', '" . $hash . "');";
            $result = mysqli_query($pdo, $sql);

            if ($result) {
//            header('location: index.php');
                $regsuccess = true;
            } else {
                $regfail = true;
            }

        }
    }
}


