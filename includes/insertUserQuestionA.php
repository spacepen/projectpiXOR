<?php
include 'counter.php';
include 'dbconnect.php';
    $usersID = 4;
    $question = 5;
    if(isset($_POST['answer1'])) {
        $sql = "INSERT INTO userquestion (selection, usersID, questionID) VALUES (TRUE, '" . $usersID . "', '" . $question  . "');";
        $result = mysqli_query($pdo, $sql);
}
