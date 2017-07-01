<?php

include 'dbconnect.php';
if(isset($_POST["questionId"])) {
        $questionID = $_POST["questionId"];
        if ($_POST["answer"] == "a") {
            $sql = "INSERT INTO userquestion (selection, usersID, questionID) VALUES ('" . 1 . "', '" . 1 . "', '" . 1 . "');";
            $result = mysqli_query($pdo, $sql);

        }else{
            $sql = "INSERT INTO userquestion (selection, usersID, questionID) VALUES ('" . 2 . "', '" . 1 . "', '" . 1 . "');";
            $result = mysqli_query($pdo, $sql);
        }
    }

