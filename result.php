<?php
session_start();

if ($_SESSION["Login"] != "YES")
header("Location: login.php");

if ($_SESSION["LEVEL"] == 3) {

?>

<html>
	<head><title>Subject List</title><HEAD>
	<body>

	  <?php
	     require ("config.php");

		 $find=$_POST['id'] ?? "";

	     $sql = "SELECT * FROM form WHERE id LIKE '%$find%'";

		 $result = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($result) > 0) {

		?>

		<h3>Your search result:</h3>

		<table width="600" border="1" cellspacing="0" cellpadding="3">

		<tr>
		<td align="center"><strong>Status</strong></td>
		<?php if (isset($_POST['approve'])){
			$status = "Approved";
		}
		elseif (isset($_POST['decline'])) {
			$status = "Declined";
		}
			?>
		<td align="center"> <?php echo $status ?> </td>
	 	</tr>

		</table>

		<?php
	   		}
			else {
				echo "<h3>No records found</h3>"; }

	     mysqli_close($conn);
	   ?>
<?php }
	elseif ($_SESSION["LEVEL"] == 2) {
		echo "Thank You!";}
	

	
		 $ID = $_SESSION["Staffid"];

		 require ("config.php");

		 $sql="SELECT * FROM form WHERE id='$ID'";
		 $result = mysqli_query($conn, $sql);
		 $rows=mysqli_fetch_assoc($result);


		 if($_POST['Approval']=="Approve")
	     $sql = "UPDATE form SET status='Approved'  WHERE id='$ID'";
		 elseif($_POST['Approval']=="Decline")
		 $sql = "UPDATE form SET status='Decline'  WHERE id='$ID'";



	     if (mysqli_query($conn, $sql)) {
			echo '<script>
			alert("Record updated successfully");
			window.location.href="check_login.php";
			</script>';

			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
          mysqli_close($conn);



		?>

		<button onclick="window.location.href='check_login.php';">Previous Page</button>

	</body>
</html>
	

