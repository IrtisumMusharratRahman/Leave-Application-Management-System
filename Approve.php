<?php
session_start();

if ($_SESSION["Login"] != "YES") //if the user is not logged in or has been logged out..
header("Location: login.php");   //send user to login page


?>
	<html>
	<head><title>Approing</title><head>
	<body>

	<h1>Approving Staff Leave Application</h1>

<?php

		 $ID = $_SESSION["Staffid"];

		 require ("config.php");

		 $sql="SELECT * FROM form WHERE id='$ID'";
		 $result = mysqli_query($conn, $sql);
		 $rows=mysqli_fetch_assoc($result);

?>


<form name="form1" method="post" action="result.php">
<table border=solid cellspacing="5" cellpadding="0">

  <tr>
  <td align="center"><strong>ID</strong></td>
  <td align="center"><?php echo $rows['id']; ?></td>
  </tr>

  <tr>
  <td align="center"><strong>Name</strong></td>
  <td align="center"><?php echo $rows['name']; ?></td>
  </tr>

  <tr>
  <td align="center"><strong>Days</strong></td>
  <td align="center"><?php echo $rows['days']; ?></td>
  </tr>

  <tr>
  <td align="center"><strong>Reason</strong></td>
  <td align="center"><?php echo $rows['reason']; ?></td>
  </tr>

</table>

<br/>

<input type="submit" name="Approval" value="Approve">
<input type="submit" name="Approval" value="Decline">

</form>

<button onclick="window.location.href='check_login.php';">Previous Page</button>

</body>
</html>

<?php

	     mysqli_close($conn);
?>
