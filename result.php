<?php
session_start();

if ($_SESSION["Login"] != "YES")
header("Location: login.php");

if ($_SESSION["LEVEL"] == 3) {

?>

<html>
	<head><title>Staff Application Status</title><HEAD>
	<body>

	  <?php
	     
		 $ID = $_SESSION["id"];

		 require ("config.php");

		 $sql="SELECT * FROM form WHERE id='$ID'";
		 $result = mysqli_query($conn, $sql);
		 $rows=mysqli_fetch_assoc($result);


		?>

		<h1>Staff Application Status</h1>

		<table width="600" border="1" cellspacing="0" cellpadding="3">

		<tr>
		<td align="center"><strong>Status</strong></td>
		
		<td align="center"> <?php echo $rows['status'] ?> </td>
	 	</tr>

		</table>

		<?php
	   		

	     mysqli_close($conn);
	   
 	}
	elseif ($_SESSION["LEVEL"] == 2) {
		echo "Thank You!";
	

	
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


			}
		?>

		<button onclick="window.location.href='check_login.php';">Previous Page</button>

	</body>
</html>
	

