<?php
session_start();
require('./Table/config.php');

$_SESSION["Login"] = "XXX";
?>


<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="./css/style_login.css">
	<script src="./Js/login.js"></script>
</head>

<body>
	<div id="container">
		<p class="head">Welcome To! Leave Application Management System</p>
		<br />
		<br />
		<form method="post" class="form" name="login_form" action="check_login.php" onsubmit="return validateLoginForm()">
			<p>Username: <input type="text" size="30" placeholder="username" name="username" /></p>
			<p>Password: <input type="password" size="30" placeholder="password" name="password" /></p>
			<br />
			<p><input type="submit" class="btn" value="Login" /></p>
		</form>
	</div>
</body>

</html>