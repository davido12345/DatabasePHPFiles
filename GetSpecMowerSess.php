<?php

$dsn = "mysql:host=localhost;dbname=a18ee5mow2";
$username = "a18ee5mow2";
$password = "iewosv0ile"; 

$pdo = new PDO($dsn, $username, $password);

$_GET["mow_id"];
$statement = $pdo->prepare("SELECT * FROM a18ee5mow2.Sessions WHERE id_Mower = ".$_GET["mow_id"]);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo $json;

?>