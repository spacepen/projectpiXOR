<?php

include 'dbconnect.php';

    if(isset($_POST['answer1'])) {
        $sql = "INSERT INTO userquestion (selection, usersID, questionID) VALUES (TRUE, '" . $usersID . "', '" . $question  . "');";
        $result = mysqli_query($pdo, $sql);
}
