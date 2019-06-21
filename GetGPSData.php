<?php

$dsn = "mysql:host=localhost;dbname=a18ee5mow2";
$username = "a18ee5mow2";
$password = "iewosv0ile"; 

$pdo = new PDO($dsn, $username, $password);

$_GET["id_Mower"];
$_GET["id_Session"];
$statement = $pdo->prepare("SELECT Gps_x, Gps_y FROM a18ee5mow2.SessionData WHERE id_mower = ".$_GET["id_Mower"]." AND id_Session = ".$_GET["id_Session"]);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo $json;
?>