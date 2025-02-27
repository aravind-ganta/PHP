<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}
$servername = "localhost:3306";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=classicmodels", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM MyGuests");
    //$stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'");
    //$stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname");
    //$stmt = $conn->prepare("SELECT * FROM MyGuests LIMIT 5");
    //$stmt = $conn->prepare("SELECT * FROM MyGuests LIMIT 5 OFFSET 5");
    //$stmt = $conn->prepare("SELECT * FROM MyGuests LIMIT 3, 6");


    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
      echo $v;
    }
 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>