<?php
session_start(); // Start up your PHP Session

if ($_SESSION["Login"] != "YES")
header("Location: login.php");

?>


<html>
<head>
  <title>Adding New User</title>
  <script>
    function checkvalidation(){
		var temp;
        if (document.forms["add_user_form"]["username"].value == "") {
				alert("Please Enter A User Name!!!");
				return false;
		}
		if (document.forms["add_user_form"]["id"].value == "") {
				alert("Please Enter A User ID!!!");
				return false;
		}
		if (document.forms["add_user_form"]["password"].value == "") {
				alert("Please Enter A Password!!!");
				return false;
		}
		temp= document.forms["add_user_form"]["level"].value;
		if (temp == "" || isNaN(temp) || temp<1 || temp>3) {
				alert("Please Enter A Valid Integer Between 1 to 3");
				return false;
		}
			
    }
</script>
</head>
<body>


<h1>NEW USER FORM</h1>

<p>Please fill in the following information:<br><br>

<form name="add_user_form" method="post" action="add_user.php" onsubmit="return checkvalidation()">
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

<button onclick="window.location.href='check_login.php';">Previous Page</button>

	</body>
	</html>
