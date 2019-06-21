<?php

$dsn = "mysql:host=localhost;dbname=a18ee5mow2";
$username = "a18ee5mow2";
$password = "iewosv0ile"; 

$pdo = new PDO($dsn, $username, $password);

$statement = $pdo->prepare("SELECT time_SessionData, w_1, x_1, y_1, z_1, w_2, x_2, y_2, z_2, w_3, x_3, y_3, z_3 FROM a18ee5mow2.SessionData ORDER BY time_SessionData");
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo $json;
?>