<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";

try {
  $conn = new PDO("mysql:host=$servername;dbname=classicmodels", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

  $conn->exec($sql);
  echo "Table MyGuests created successfully";
 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;
?>

