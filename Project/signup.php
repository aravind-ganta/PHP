<?php
// Connect to the MySQL database using PDO

require_once 'connection.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Retrieve the user data from the POST request
    
    $password = $_POST["password"];
	$confirm_password = $_POST["confirm_password"];	
	// Check if the passwords match
	if($password != $confirm_password) {
        echo "<p>The passwords do not match. Click here to try again.</p>";
    }else{
        $username = $_POST["username"];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $email = $_POST["email"];
        $user_query = $db->query('SELECT username FROM users');
        $user=$user_query->fetchAll(PDO::FETCH_ASSOC);
        //print_r($user[1]);
        $duplicate=false;
        for($i=0;$i<count($user);$i++){
            if($user[$i]['username']===$username){
                $duplicate=true;
                break;  
            }
        }

        if($duplicate){
            echo "User already in database. Try different username.";
                //header("Location: signup.html");
        }else{

            $stmt = $db->prepare("INSERT INTO users (username, pass, email)
        VALUES (:username, :pass, :email)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pass', $password);
        $stmt->bindParam(':email', $email);
          
            
          $stmt->execute();
          // Redirect to the home page
          header("Location: login.html");
        }


        

            
        }

        
// Prepare and execute a SQL statement to insert the user's data into the database


// Close the database connection
$db = null;
}

?>

