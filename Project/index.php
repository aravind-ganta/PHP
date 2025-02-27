<?php 
require_once 'connection.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Hi User!</title>
	<link href="index.css" type="text/css" rel="stylesheet">
</head>
<body>
	
    
	<h1>User HomePage</h1>

	<p>Welcome!!!</p>
	
		<?php
		session_start();
		if(isset($_SESSION['logged_in'])){
			echo $_SESSION['username'];
			echo "\n";
			session_destroy();
		}else{
			header('Location: login.html');
		}
		
		?>
	
	<p>Click here to logout.<a href="logout.php">Logout</a></p>
	<br>
	<video width="480" height="360"controls>
	<source src="video.mp4" type="video/mp4">
	Your browser not supports.
	</video>
	<br>
	<video width="480" height="360"controls>
	<source src="video1.mkv" type="video/mp4">
	Your browser not supports.
	</video>
	
	

    
</body>
</html>