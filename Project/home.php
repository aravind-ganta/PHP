<!DOCTYPE html>
<html>
<head>
	<title>My Home Page</title>
	<link href="home.css" type="text/css" rel="stylesheet">
</head>
<body>
    <a href='signup.html' class='btn btn-secondary m-2 active' role='button'>SignUp</a>
    <a href='login.html' class='btn btn-secondary m-2 active' role='button'>Login</a>
    
	<h1>Welcome to HomePage!</h1>
	
	<?php
		// PHP code can be written here
		// For example, you can output the current date and time:
		echo "Today is " . date("l, F jS Y") . "<br>";
		echo "The time is " . date("h:i:s A") . "<br>";
	?>
	
	<p>Here are some of my favorite pics:</p>
	<ul>
		<li><img src="media/photo.jpg" alt="car" width=1280" height="720"></li>
		<li><img src="media/photo1.jpg" alt="car" width=1280" height="720"></li>
		<li><img src="media/photo2.jpg" alt="car" width=1280" height="720"></li>
		<li><img src="media/photo3.jpg" alt="car" width=1280" height="720"></li>
	</ul>
	
	<p>Thank you for visiting!</p>
</body>
</html>