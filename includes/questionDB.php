<?php
include 'dbconnect.php';
$sql = "SELECT * FROM question LIMIT 0, 1"; //TODO nur die die der nutzer noch nicht beantwortet hat
//darauf reagieren - wenn es keine mehr gibt
$res = $pdo->query($sql);



$row = null;

if($res->num_rows > 0) {
    $row = $res->fetch_assoc();
}


if($row !== null) {
    $questionId = $row['questionID'];
}

$pdo->close();
