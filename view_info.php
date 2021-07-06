<?php
session_start();

if ($_SESSION["Login"] != "YES")
header("Location: login.php");

if ($_SESSION["LEVEL"] == 1) {

?>

	<html>
	<head><title>Viewing User Data</title><head>
	<body>

	<h1>View User Details</h1>

		<?php
	     require ("config.php");

	     $sql = "SELECT * FROM user";
		 $result = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($result) > 0) { 	?>

		<table width="600" border="1" cellspacing="0" cellpadding="3">

		<tr>
		<td align="center"><strong>username</strong></td>
		<td align="center"><strong>Password</strong></td>
		<td align="center"><strong>Level</strong></td>
		<td align="center"><strong>Update</strong></td>
		<td align="center"><strong>Delete</strong></td>
		</tr>

		<?php
			while($rows = mysqli_fetch_assoc($result)) {
		?>

	     <tr>
			<td><?php echo $rows['username']; ?></td>
			<td><?php echo $rows['password']; ?></td>
			<td><?php echo $rows['level']; ?></td>
			<td align="center"> <a href="update_info_form.php?id=<?php echo $rows['id']; ?>">update</a> </td>
			<td align="center"> <a href="delete_info.php?id=<?php echo $rows['id']; ?>">delete</a> </td>
		</tr>

		<?php

			}
		} else {
			echo "<h3>There are no records to show</h3>";
			}

	     mysqli_close($conn);
	   ?>

	    </table>

		<br><br>
		<a href="user_form.php">Click here to insert student</a>

		<br><br>
		<a href="report.php">Click here to view the report of leave forms</a> <br/><br/>
	   <a href="logout.php">LOGOUT</a>

 	<?php }
	else if ($_SESSION["LEVEL"] != 1) {

	echo "<p>Wrong User Level! You are not authorized to view this page</p>";

	echo "<p><a href='logout.php'>LOGOUT</a></p>";

   }

  ?>
	</body>
	</html>
