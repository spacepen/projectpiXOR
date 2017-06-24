<?php
include "dbconnect.php";
$email = $_POST["email"];
$password = $_POST["passwort"];


$sql = "INSERT INTO users (email, password) VALUES ('" . $email . "', '" . $password . "');";

echo "<p><strong>PHP Info: </strong>" . $sql . "</p>";

$result = mysqli_query($pdo, $sql);

echo $result;

if($result) {
    echo 'Du wurdest erfolgreich registriert. <a href="/anwendung.php">Zur Anwendung</a>';
} else {
    echo ' Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
}

?>
