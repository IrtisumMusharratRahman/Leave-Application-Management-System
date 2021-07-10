<?php
session_start();
require('./Table/config.php');

$_SESSION["Login"] = "XXX";

if(isset($_COOKIE['USER']) and isset($_COOKIE['PASS'])) { 
 $user= $_COOKIE['USER'];
 $pass= $_COOKIE['PASS']; 

echo "<script> 
document.getElementById('user').value = '$user';
document.getElementById('pass').value = '$pass'; 
</script>";
}
?>


<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="./css/style_login.css">
	<script src="./Js/login.js"></script>
</head>

<body>
	<div id="container">
		<p class="head">Leave Application Management System</p>
		<br />
		<br />
		<form method="post" class="form" name="login_form" action="check_login.php" onsubmit="return validateLoginForm()">
			<p>Username: <input type="text" size="30" placeholder="username" name="username" /></p>
			<p>Password: <input type="password" size="30" placeholder="password" name="password" /></p>
			<input type="checkbox" name="remember" value="1">Remember Me</input> 
			<br />
			<p><input type="submit" class="btn" value="Login" /></p>
		</form>
	</div>
</body>

</html>