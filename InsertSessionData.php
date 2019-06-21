<?php

$dsn = "mysql:host=localhost;dbname=a18ee5mow2";
$username = "a18ee5mow2";
$password = "iewosv0ile"; 

$pdo = new PDO($dsn, $username, $password);

$_GET["id_Session"];
$_GET["id_Mower"];
$_GET["time_SessionData"];
$_GET["Gps_x"];
$_GET["Gps_y"];
$_GET["Joystick_x"];
$_GET["Joystick_y"];
$_GET["Joystick_z"];
$_GET["Joystick_b1"];
$_GET["Joystick_b2"];
$_GET["Oil_temp"];

$_GET["w_1"];
$_GET["x_1"];
$_GET["y_1"];
$_GET["z_1"];

$_GET["w_2"];
$_GET["x_2"];
$_GET["y_2"];
$_GET["z_2"];

$_GET["w_3"];
$_GET["x_3"];
$_GET["y_3"];
$_GET["z_3"];

$statement = $pdo->prepare("INSERT INTO `a18ee5mow2`.`SessionData` (`id_Session`, `id_Mower`, `time_SessionData`,
 `Gps_x`, `Gps_y`, `Joystick_x`, `Joystick_y`, `Joystick_z`, `Joystick_b1`, `Joystick_b2`, `Oil_temp`,
 `w_1`, `x_1`, `y_1`, `z_1`, 
 `w_2`, `x_2`, `y_2`, `z_2`, 
 `w_3`, `x_3`, `y_3`, `z_3`) VALUES 
('"
.$_GET["id_Session"]."', '"
.$_GET["id_Mower"]."', '"
.$_GET["time_SessionData"]."', '"
.$_GET["Gps_x"]."', '"
.$_GET["Gps_y"]."', '"
.$_GET["Joystick_x"]."', '"
.$_GET["Joystick_y"]."', '"
.$_GET["Joystick_z"]."', '"
.$_GET["Joystick_b1"]."', '"
.$_GET["Joystick_b2"]."', '"
.$_GET["Oil_temp"]."', '"
.$_GET["w_1"]."', '"
.$_GET["x_1"]."', '"
.$_GET["y_1"]."', '"
.$_GET["z_1"]."', '"
.$_GET["w_2"]."', '"
.$_GET["x_2"]."', '"
.$_GET["y_2"]."', '"
.$_GET["z_2"]."', '"
.$_GET["w_3"]."', '"
.$_GET["x_3"]."', '"
.$_GET["y_3"]."', '"
.$_GET["z_3"]."');");
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "Insert success!";
?>
