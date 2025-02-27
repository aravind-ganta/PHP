<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";

try {
  $conn = new PDO("mysql:host=$servername;dbname=php", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    pass VARCHAR(60) NOT NULL,
    email VARCHAR(50)
    )";

  $conn->exec($sql);
  echo "Table users created successfully";
 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;
?>