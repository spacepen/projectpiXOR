<?php
    include 'dbconnect.php';
    if(isset($_POST['answer2'])) {
        $fql = "INSERT INTO userquestion (selection, usersID, questionID) VALUES (FALSE, '" . 1 . "', '" . 1 . "');";
        $result = mysqli_query($pdo, $fql);
    }

?>