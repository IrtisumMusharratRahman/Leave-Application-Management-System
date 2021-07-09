<?php
session_start();
require('config.php');

$_SESSION["Login"] = "XXX";
?>



<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="./css/style_login.css">
</head>

<body>

	<p class="head">Welcome! Leave Application Management System</p>
	<br />
	<br />
	<form method="post" class="form" name="login_form" action="check_login.php" onsubmit="return validateLoginForm()">
		<p>Username: <input type="text" placeholder="username" name="username" /></p>
		<p>Password: <input type="password" placeholder="password" name="password" /></p>
		<br />
		<p><input type="submit" class="btn" value="Login" /></p>
	</form>

	<script>
		function validateLoginForm() {
			if (document.forms["login_form"]["username"].value == "") {
				alert("Please Enter Your User Name!!!");
				return false;
			}
			if (document.forms["login_form"]["password"].value == "") {
				alert("Please Enter Your Password!!!");
				return false;
			}
		}
	</script>

</body>

</html>