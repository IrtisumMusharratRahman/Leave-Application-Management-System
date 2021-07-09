<?php
// Start up your PHP Session 
session_start();
// If the user is not logged in send him/her to the login form
if ($_SESSION["Login"] != "YES") 
header("Location: login.php");

?>


<html>
<head><title>Searching Form</title></head>
<script>
    function validation(){
        if (document.forms["form_search"]["staffID"].value == "") {
				alert("Please Enter A Staff ID!!!");
				return false;
			}
    }
</script>
<body>

<b>Search for Staff</b><br/><br/>

<form name="form_search" method ="POST" action="view_search_staff.php" onsubmit="return validation()">

<table border="0">
	<tr>
        <td>Type Staff ID :</td>
        <td><input type="text" name="staffID" size="20"></td>
		<td><input type="submit" name="button1" value="Search"></td>
    </tr>
</table>
 
</form>

    <a href="main.php">Go back to main page</a><br/><br/> 
	<a href="logout.php">LOGOUT</a><br/><br/> 
</body>
</html>