<?php

session_start();
$user=$_SESSION['username'];
echo $user;
require_once 'connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $password = $_POST["new_password"];
	$confirm_password = $_POST["confirm_password"];
    
    if($password === $confirm_password) {
    $pass = password_hash($password, PASSWORD_DEFAULT);
    echo $password;
    $stmt = $db->prepare("UPDATE users SET pass=:pass WHERE username=:user");

  
    // execute the query
    $stmt->execute(['pass'=>$pass,'user'=>$user]);
  

        
    }
}
  
