<?php
include 'dbconnect.php';
$sql = "SELECT * FROM question WHERE questioniD='$counter'";
$res = $pdo->query($sql);

if($res->num_rows > 0) {
    while($i = $res->fetch_assoc()) {
        echo  $i[$inhalt];
    }
}
$pdo->close();
