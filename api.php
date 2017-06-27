<?php

include "includes/dbconnect.php";
session_start();


if(!empty($_POST) && isset($_POST['cmd']) && $_POST['cmd'] == 'getNextQuestion') {

    $userId = $_SESSION['login_userid'];

    $sql = "SELECT * FROM question WHERE questionID IS NOT IN(SELECT questionID FROM userquestion WHERE usersID='".$userId."')";

    //$result = .... query...
    //$row = .... fetch_assoc...

    $row = array(
        'questionId' => 6,
        'questionName' => 'Wo kann man besser feiern gehen?',
        'answerA' => 'Schenke',
        'answerB' => 'Pure'
    );


    header('HTTP/1.1 200 OK');
    // set the content type
    header('Content-type: application/json');
    // set X-UA-Compatible for IE9
    header('X-UA-Compatible: IE=edge, chrome=1');


    echo json_encode($row);

}