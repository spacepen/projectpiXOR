<?php
    include 'dbconnect.php';
    $insertB = "INSERT INTO userquestion(selection, questionID, usersID) VALUES (TRUE, 1, 1 )";
    $result = mysqli_query($pdo, $insertB);

?>
