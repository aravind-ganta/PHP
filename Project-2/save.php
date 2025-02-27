<?php
require_once 'connection.php';
// Retrieve the form data
if($_SERVER["REQUEST_METHOD"] == "POST"){

$userId = $_POST['userId'];
$firstName = $_POST['firstName'];
$firstName = $firstName." ".$_POST['lastName'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$bio = $_POST['bio'];

// Insert the form data into the table
$sql = "INSERT INTO users (userId, fullName, email, gender, address, bio)
            VALUES (:userId, :fullName, :email, :gender, :address, :bio)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':userId', $userId);
    $stmt->bindParam(':fullName', $firstName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':bio', $bio);
          
            
          $stmt->execute();
          echo "Data saved successfully";

}
// Close the database connection

$conn = null;


?>
