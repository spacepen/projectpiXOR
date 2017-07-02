<?php

include 'dbconnect.php';
if(isset($_POST['questionId'])) {
        $questionId = $_POST["questionId"];
        if ($_POST["answer"] == "a") {
            $fql = "INSERT INTO userquestion (selection, usersID, questionID) VALUES (TRUE, '" . 1 . "', '" . 1 . "');";
            $result = mysqli_query($pdo, $fql);

        } else {
            $fql = "INSERT INTO userquestion (selection, usersID, questionID) VALUES (FALSE, '" . 1 . "', '" . 1 . "');";
            $result = mysqli_query($pdo, $fql);
        }
    }

