<?php

$dsn = "mysql:host=localhost;dbname=a18ee5mow2";
$username = "a18ee5mow2";
$password = "iewosv0ile"; 

$pdo = new PDO($dsn, $username, $password);

$_GET["id_Mower"];
$statement = $pdo->prepare("SELECT DISTINCT id_Session FROM a18ee5mow2.SessionData WHERE id_Mower = ".$_GET["id_Mower"]);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo $json;
?>
