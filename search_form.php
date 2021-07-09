<?php
// Start up your PHP Session 
session_start();
// If the user is not logged in send him/her to the login form
if ($_SESSION["Login"] != "YES") 
header("Location: login.php");

?>


<html>
<head>
    <title>Enter Staff ID</title>
    <link rel="stylesheet" href="./css/table_report.css" type="text/css"/>
</head>
<script src="./Js/search_form.js"></script>
<body>

<h1>Search for Staff details</h1><br/><br/>

<form name="form_search" method ="POST" action="view_search_staff.php" onsubmit="return validation()">

<table>
	<tr>
        <td>Type Staff ID :</td>
        <td><input type="text" name="staffID" size="20"></td>
		<td><input type="submit" name="button1" value="Search"></td>
    </tr>
</table>
 
</form>
<br>

    <button onclick="window.location.href='check_login.php';">Previous Page</button>
</body>
</html>