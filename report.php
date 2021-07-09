<?php
session_start();

if ($_SESSION["Login"] != "YES") //if the user is not logged in or has been logged out
	header("Location: login.php");

?>

<html>

<head>
	<title>Leave Applications Reoprt</title>
	<link rel="stylesheet" href="./css/table_report.css" type="text/css"/>

	<head>
	<body>

		<h1>Leave Applications Reoprt </h1>

		<?php
		require("./Table/config.php");

		$sql = "SELECT * FROM form ORDER BY name";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) { 	?>

			<table width="600" border="1" cellspacing="0" cellpadding="3">

				<tr>
					<th align="center"><strong>Name</strong></th>
					<th  align="center"><strong>ID</strong></th>
					<th  align="center"><strong>Start Date</strong></th>
					<th  align="center"><strong>End Date</strong></th>
					<th  align="center"><strong>Number of Days</strong></th>
					<th  align="center"><strong>Reason</strong></th>
					<th  align="center"><strong>Status</strong></th>
				</tr>

				<?php
				while ($rows = mysqli_fetch_assoc($result)) {
				?>
					<tr>
						<td><?php echo $rows['name']; ?></td>
						<td><?php echo $rows['id']; ?></td>
						<td><?php echo $rows['Sdate']; ?></td>
						<td><?php echo $rows['Edate']; ?></td>
						<td><?php echo $rows['days']; ?></td>
						<td><?php echo $rows['reason']; ?></td>
						<td><?php echo $rows['status']; ?></td>
					</tr>

				<?php }
				mysqli_close($conn);
				?>
			</table>
		<?php }
		?>

		<br>
		<br>
		<button onclick="window.location.href='check_login.php';">Previous Page</button>
	</body>

</html>