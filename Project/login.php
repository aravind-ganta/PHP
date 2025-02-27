<?php
session_start();

require_once 'connection.php';
// validate user input
$_SESSION['username'] = $_POST['username'];
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
// authenticate the user using PDO
    $valid_user=false;
    
    $user_query = $db->query('SELECT username FROM users');
    $user=$user_query->fetchAll(PDO::FETCH_ASSOC);
        for($i=0;$i<count($user);$i++){
            if($user[$i]['username']===$username){
                $valid_user=true;
                break;  
            }
        }
    if($valid_user){
        
        
        $stmt = $db->prepare('SELECT * FROM users WHERE username = :username');
    $stmt->execute(['username' => $username]);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    for($i=0;$i<=count($users);$i++){
        $pass_hash=$users[$i]['pass'];
        if(password_verify($password, $pass_hash)){
            echo "Password matched";
            $_SESSION['logged_in']=true;
            header("Location: index.php");
            break;
        }else{
            echo "Incorrect Password!";
            break;
        }
    }

    }else{

        echo "Invalid UserName!";
        
    }
    
    
?>







