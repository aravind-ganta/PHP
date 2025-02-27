<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=classicmodels", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // begin the transaction
  $conn->beginTransaction();
  // our SQL statements
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')");
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Mary', 'Moe', 'mary@example.com')");
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Julie', 'Dooley', 'julie@example.com')");

  // commit the transaction
  $conn->commit();
  echo "New records created successfully";
 
} catch(PDOException $e) {
    // roll back the transaction if something failed
  $conn->rollback();
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;
?>
