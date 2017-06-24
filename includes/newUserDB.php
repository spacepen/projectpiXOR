<?php
include 'dbconnect.php';
$email = $_POST["email"];
$password = $_POST["passwort"];

$sql = "INSERT INTO users (email, password) VALUES (" . $email . "," . $password . ");";


echo "<p><strong>PHP Info: </strong>" . $sql . "</p>";

$result = mysqli_query($pdo, $sql);

echo $result;

if($sql) {
    echo "true" ;
} else {
    $pdo->errorCode() ;
    echo "false" ;
}
?>