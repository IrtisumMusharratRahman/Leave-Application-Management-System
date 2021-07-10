<?php
session_start();

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

if ($_SESSION["LEVEL"] == 3) {

?>

	<html>

	<head>
		<title>Leave Application Status</title>
		<link rel="stylesheet" href="./css/table_report.css" type="text/css" />

	</head>

	<body>

		<?php
		$ID = $_SESSION["id"];
		require("./Table/config.php");
		$sql = "SELECT * FROM newapplication WHERE id='$ID'";
		$result = mysqli_query($conn, $sql);
		$rows = mysqli_fetch_assoc($result);
		?>


		<h1>Staff Application Status</h1>



		<table width="600" border="1" cellspacing="0" cellpadding="3">

			<tr>
				<th align="center"><strong>Name</strong></th>
				<th align="center"><strong>ID</strong></th>
				<th align="center"><strong>Start Date</strong></th>
				<th align="center"><strong>End Date</strong></th>
				<th align="center"><strong>Number of Days</strong></th>
				<th align="center"><strong>Reason</strong></th>
				<th align="center"><strong>Status</strong></th>
			</tr>

			<?php while ($rows = mysqli_fetch_assoc($result)) { ?>
				<tr>
					<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['id']; ?></td>
					<td><?php echo $rows['Sdate']; ?></td>
					<td><?php echo $rows['Edate']; ?></td>
					<td><?php echo $rows['days']; ?></td>
					<td><?php echo $rows['reason']; ?></td>
					<td><?php echo $rows['status']; ?></td>
				</tr>
			<?php } ?>

			<table>


			<?php


			mysqli_close($conn);
		} elseif ($_SESSION["LEVEL"] == 2) {


			$ID = $_SESSION["Staffid"];
			$days_of_leave = $_SESSION["days"];

			require("./Table/config.php");

			$sql = "SELECT * FROM NewApplication WHERE id='$ID' AND days='$days_of_leave'";
			$result = mysqli_query($conn, $sql);
			$rows = mysqli_fetch_assoc($result);

			$id = $rows['id'];
			$name = $rows['name'];
			$Sdate = $rows['Sdate'];
			$Edate = $rows['Edate'];
			$days = $rows['days'];
			$reason = $rows['reason'];
			$status = $_POST['Approval'];



			$sql = "INSERT INTO form(id, name, Sdate, Edate, days, reason, status) VALUES ('$id','$name','$Sdate','$Edate','$days', '$reason', '$status' )";


			if (mysqli_query($conn, $sql)) {
				echo '<script>
			
			window.location.href="delete_info.php";
			</script>';
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
		}
			?>
			<br>

			<button onclick="window.location.href='check_login.php';">Previous Page</button>

	</body>

	</html>