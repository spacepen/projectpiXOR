<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>anwendung</title>
</head>
<body>
<?php
//Verbindung
$pdo=new mysqli('localhost', 'root', '', 'xorprojectdb');

if($pdo->connect_error) {
    die("Alles ist zu spät".$pdo->connect_error);
}
echo "connect";

$sql = "SELECT * FROM question";
$res = $pdo->query($sql);

if($res->num_rows > 0) {
    while($i = $res->fetch_assoc()) {
        echo "QuestionID:" . $i["QuestionID"] . " QName: " . $i["QName"];
    }
}
else {
    echo "I bims" . $con->error;
}
$pdo->close();

?>

<button type="button" onclick="alert('Du magst Wein!')">Wein</button>
<button type="button" onclick="alert('Du magst Bier!')">Bier</button>

</body>
</html>