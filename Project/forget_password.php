<?php
session_start();
require_once 'connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $email = $_POST["email"];
    $_SESSION['username'] = $_POST['username'];

    $user_query = $db->query('SELECT username, email FROM users');
    $user=$user_query->fetchAll(PDO::FETCH_ASSOC);
    $duplicate=false;
    for($i=0;$i<count($user);$i++){
        if($user[$i]['username']===$username and $user[$i]['email']===$email){
            $duplicate=true;
            break;  
        }
    }

    if($duplicate){
        
            header("Location: new_password.html");
    }
    else{
        echo "User not found in database.";
    }




}
