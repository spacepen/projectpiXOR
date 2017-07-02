<?php

include "includes/dbconnect.php";
session_start();


if(!empty($_POST) && isset($_POST['cmd']) && $_POST['cmd'] == 'getNextQuestion') {

    $userId = $_SESSION['login_userid'];

    //$sql = "SELECT * FROM question WHERE questionID IS NOT IN (SELECT questionID FROM userquestion WHERE usersID='".$userId."')";
            //|--> funktioniert irgendwie nicht...?!


    $sql = "SELECT * FROM question"; //Testlösung

    $result = mysqli_query($pdo, $sql) or die(mysqli_error($pdo));     //$result = .... query...
    $row = mysqli_fetch_assoc($result);                                //$row = .... fetch_assoc...

    $row = array(
        'questionId' => $row["questionID"],
        'questionName' => $row["questionName"],
        'answerA' => $row["answerA"],
        'answerB' => $row["answerB"]
    );

    header('HTTP/1.1 200 OK');
    // set the content type
    header('Content-type: application/json');
    // set X-UA-Compatible for IE9
    header('X-UA-Compatible: IE=edge, chrome=1');


    echo json_encode($row);

}