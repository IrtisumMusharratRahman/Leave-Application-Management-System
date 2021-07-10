<?php
session_start();

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

if ($_SESSION["LEVEL"] == 1) {

?>

	<html>

	<head>
		<title>Staff Data</title>
		<link rel="stylesheet" href="./css/table_report.css" type="text/css"/>

		<head>

		<body>

			<h1>Staff Details</h1>

			<?php
			require("./Table/config.php");

			$sql = "SELECT * FROM user";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) { 	?>

				<table width="600" border="1" cellspacing="0" cellpadding="3">

					<tr>
						<th align="center"><strong>Staff Name</strong></th>
						<th align="center"><strong>Password</strong></th>
						<th align="center"><strong>Level</strong></th>
						<th align="center"><strong>Update</strong></th>
						<th align="center"><strong>Delete</strong></th>
					</tr>

					<?php
					while ($rows = mysqli_fetch_assoc($result)) {
					?>

						<tr>
							<td><?php echo $rows['username']; ?></td>
							<td><?php echo $rows['password']; ?></td>
							<td><?php echo $rows['level']; ?></td>
							<td align="center"> <button><a href="update_info_form.php<?php $_SESSION["Staffid"]=$rows['id']; ?>">Update</a></button> </td>
							<td align="center"> <button><a href="delete_info.php<?php $_SESSION["Staffid"]=$rows['id']; ?>">Delete</a></button> </td>
						</tr>

				<?php

					}
				} else {
					echo "<h3>There are no records to show</h3>";
				}

				mysqli_close($conn);
				?>

				</table>

				<br /><br />

				<button onclick="window.location.href='check_login.php';">Previous Page</button>

			<?php } else if ($_SESSION["LEVEL"] != 1) {

			echo "<p>Wrong User Level! You are not authorized to view this page</p>";

			echo "<p><a href='logout.php'>LOGOUT</a></p>";
		}

			?>
		</body>

	</html>