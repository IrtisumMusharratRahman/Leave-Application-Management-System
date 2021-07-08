<?php
session_start();

if ($_SESSION["Login"] != "YES")
header("Location: login.php");


?>
	<html>
	<head><title>Updating User Data</title><head>
	<body>

	<h1>Update User Data Form</h1>

<?php

		 $ID =$_SESSION["id"];
		

		 require ("config.php");

		 $sql="SELECT * FROM user WHERE id='$ID'";
		 $result = mysqli_query($conn, $sql);
		 $rows=mysqli_fetch_assoc($result);

?>


<form name="form1" method="post" action="update_info.php">
<table border="0" cellspacing="5" cellpadding="0">

<tr>
<td align="center">&nbsp;</td>
<td align="center"><strong>Username</strong></td>
<td align="center"><strong>Password</strong></td>
<td align="center"><strong>Level</strong></td>
<td align="center">&nbsp;</td>
</tr>

<tr>
<td align="center"><input name="id" type="hidden" id="id" value="<?php echo $rows['id']; ?>"></td>
<td align="center"><input name="username" type="text" id="username" size="50" value="<?php echo $rows['username']; ?>"></td>
<td align="center"><input name="password" type="text" id="password" size="13" value="<?php echo $rows['password']; ?>"></td>
<td align="center"><?php echo $rows['level']; ?></td>
<td align="center"><input type="submit" name="Submit" value="Update"></td>
</tr>

</table>

</form>

<button onclick="window.location.href='check_login.php';">Previous Page</button>

</body>
</html>

<?php

	     mysqli_close($conn);
?>


