<?php
class DatabaseConnect {
private $host = "a18ee5mow2";
private $username = "a18ee5mow2";
private $password = "iewosv0ile"; 
private $servername = "localhost"; 
private $conn;


try {
    $conn = new PDO("mysql:host=$servername;dbname=$host", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM a18ee5mow2.Mower"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
}
?>