<?php

include 'dbconnect.php';

            $fql = "INSERT INTO userquestion (selection, usersID, questionID) VALUES ('" . 1 . "', '" . 1 . "', '" . 1 . "');";
            $result = mysqli_query($pdo, $fql);



