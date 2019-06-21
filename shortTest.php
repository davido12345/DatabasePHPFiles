<?php

$dsn = "mysql:host=localhost;dbname=a18ee5mow2";
$username = "a18ee5mow2";
$password = "iewosv0ile"; 

$pdo = new PDO($dsn, $username, $password);


$statement = $pdo->prepare("SELECT * FROM a18ee5mow2.Mower");
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo $json;

//$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
//$json = json_encode($rows); <- This didn't work, returned empty

//printf("[");
//foreach($rows as $row) {
//    printf("{id_Mower: {$row['id_Mower']} id_WorkGroup: {$row['id_WorkGroup']} name_Mower: {$row['name_Mower']}},\n");
//}
//printf("]");