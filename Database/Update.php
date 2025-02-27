<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=classicmodels", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE MyGuests SET lastname='Moe' WHERE id=2";

    // Prepare statement
    $stmt = $conn->prepare($sql);
  
    // execute the query
    $stmt->execute();
  
    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;
?>