<?php
session_start();

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

if ($_SESSION["LEVEL"] == 2) {

?>

	<html>

	<head>
		<title>New Applications</title>

		<head>
		<link rel="stylesheet" href="./css/table_report.css" type="text/css"/>

		<body>

			<h1>All New Applications</h1>

			<?php
			require("./Table/config.php");

			$sql = "SELECT * FROM NewApplication";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) { 	?>

				<table width="600" border="1" cellspacing="0" cellpadding="3">

					<tr>
						<th align="center"><strong>Name</strong></th>
						<th align="center"><strong>ID</strong></th>
						<th align="center"><strong>Days</strong></th>
						<th align="center"><strong>Reason</strong></th>
						<th align="center"><strong>Status</strong></th>
						<th align="center"><strong>Approval</strong></th>
					</tr>

					<?php
					while ($rows = mysqli_fetch_assoc($result)) {
					?>

						<tr>
							<td><?php echo $rows['name']; ?></td>
							<td><?php echo $rows['id']; ?></td>
							<td><?php echo $rows['days']; ?></td>
							<td><?php echo $rows['reason']; ?></td>
							<td><?php echo $rows['status']; ?></td>
							<td align="center">
							<?php $_SESSION["Staffid"] = $rows['id']; ?>
							<button onclick="window.location.href='Approve.php';">Approval</button>
							
							</td>


						</tr>

			<?php }
				}
			} else {
				echo "<h3>There are no records to show</h3>";
			}

			mysqli_close($conn);
			?>

				</table>

				<br><br>

				<button onclick="window.location.href='check_login.php';">Previous Page</button>





		</body>

	</html>