<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";

try {
  $conn = new PDO("mysql:host=$servername;dbname=project", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "CREATE TABLE users (
    userId INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fullName VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    address VARCHAR(255) NOT NULL,
    bio TEXT
)";

  $conn->exec($sql);
  echo "Table MyGuests created successfully";
 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;
?>

