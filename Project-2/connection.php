<?php
$host = "localhost:3306";
$username = "root";
$password = "root";
$dsn = "mysql:host=$host;dbname=project";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
try {
    $db = new PDO($dsn, $username, $password,$options);
    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}