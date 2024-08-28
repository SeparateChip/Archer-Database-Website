<?php
$dsn = "mysql:host=ictstu-db1.cc.swin.edu.au;dbname=cos20031_63_db;charset=latin1";
$dbusername = "cos20031_63";
$dbpassword = "aGmfuqd9R4";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
