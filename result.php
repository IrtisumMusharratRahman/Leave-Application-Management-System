<?php
session_start();

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

if ($_SESSION["LEVEL"] == 3) {

?>

	<html>

	<head>
		<title>Staff Application Status</title>
	</head>

	<body>

		<?php
		$ID = $_SESSION["id"];
		require("./Table/config.php");
		$sql = "SELECT * FROM form WHERE id='$ID'";
		$result = mysqli_query($conn, $sql);
		$rows = mysqli_fetch_assoc($result);
		?>


		<h1>Staff Application Status</h1>



		<table width="600" border="1" cellspacing="0" cellpadding="3">

				<tr>
					<td align="center"><strong>Name</strong></td>
					<td align="center"><strong>ID</strong></td>
					<td align="center"><strong>Start Date</strong></td>
					<td align="center"><strong>End Date</strong></td>
					<td align="center"><strong>Number of Days</strong></td>
					<td align="center"><strong>Reason</strong></td>
					<td align="center"><strong>Status</strong></td>
				</tr>

				

					<tr>
						<td><?php echo $rows['name']; ?></td>
						<td><?php echo $rows['id']; ?></td>
						<td><?php echo $rows['Sdate']; ?></td>
						<td><?php echo $rows['Edate']; ?></td>
						<td><?php echo $rows['days']; ?></td>
						<td><?php echo $rows['reason']; ?></td>
						<td><?php echo $rows['status']; ?></td>
					</tr>

				<table> 


	<?php


	mysqli_close($conn);
} elseif ($_SESSION["LEVEL"] == 2) {
	

	$ID = $_SESSION["Staffid"];         // SESSION e Staffid koi paisos?

	require("./Table/config.php");

	$sql = "SELECT * FROM form WHERE id='$ID'";
	$result = mysqli_query($conn, $sql);
	$rows = mysqli_fetch_assoc($result);

	$id=$rows['id'];
	$name=$rows['name'];
	$Sdate=$rows['Sdate'];
	$Edate=$rows['Edate'];
	$days=$rows['days'];
	$reason=$rows['reason'];
	$status=$_POST['Approval'] ;

	

$sql = "INSERT INTO form(id, name, Sdate, Edate, days, reason, status) VALUES ('$id','$name','$Sdate','$Edate','$days', '$reason', '$status' )";	

$_SESSION["Table"]="NewApplication";

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

	<button onclick="window.location.href='check_login.php';">Previous Page</button>

	</body>

	</html>