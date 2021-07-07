<?php
	require('create_database.php');
	require('create_user.php');
	require('insert_data_user.php');
?>

<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="./css/style_login.css">



	</head>
	<body>

		<b class="head">Welcome! Leave Application Management System</b>
	    <br/>
		<br/>
		<form method="post" class= "form" action="check_login.php">
		<p>Username: <input type="text" placeholder="username" name="username" /></p>
		<p>Password: <input type="password" placeholder="password" name="password" /></p>
		<br/>
		<p><input type="submit" class="btn" value="Login" /></p>
		</form>
		
	</body>
</html>