<?php

$dsn = "mysql:host=localhost;dbname=a18ee5mow2";
$username = "a18ee5mow2";
$password = "iewosv0ile"; 

$pdo = new PDO($dsn, $username, $password);

$_GET["id_Mower"];
$_GET["id_Session"]; 

$statement = $pdo->prepare("SELECT Oil_temp, time_SessionData FROM a18ee5mow2.SessionData WHERE id_Mower = ".$_GET["id_Mower"]." AND id_Session=". $_GET["id_Session"]." ORDER BY time_SessionData ASC");
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo $json;
?>
