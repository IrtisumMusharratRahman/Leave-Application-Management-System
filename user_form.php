<?php
session_start(); // Start up your PHP Session

if ($_SESSION["Login"] != "YES")
header("Location: login.php");

?>


<html>
<head>
  <title>Adding New User</title>
</head>
<body>


<h1>NEW USER FORM</h1>

<p>Please fill in the following information:<br><br>

<form name="form1" method="post" action="add_user.php" >
<table border="0">
	<tr>
        <td>User's Username</td>
        <td><INPUT type="text" name="username" size="100"></td>
    </tr>
    <tr>
        <td>User's ID</td>
        <td><INPUT type="text" name="id" size="15"></td>
      </tr>
    <tr>
		<td>User's password</td>
		<td><INPUT type="text" name="password" size="12"></td>
	</tr>
	<tr>
		<td>User's Level</td>
		<td><input type="" name="level" size="3"></td>
	</tr>
	<tr>
		<td></td><td align="left"><br/><input type="submit" name="button1" value="Add"></td>
	</tr>
</table>
</form>
	</body>
	</html>
