<?php

include 'dbconnect.php';

session_start();

$userId = $_SESSION['login_userid'];

//funktioniert mit userID nicht...
//$fql = "INSERT INTO userquestion (selection, usersID, questionID) VALUES ('" . 2 . "', '" . $userId . "', '" . 1 . "');";

$fql = "INSERT INTO userquestion (selection, usersID, questionID) VALUES ('" . 2 . "', '" . 1 . "', '" . 1 . "');";
$result = mysqli_query($pdo, $fql);


