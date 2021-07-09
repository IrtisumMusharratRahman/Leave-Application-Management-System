<?php
session_start();
require ("./Table/config.php");

if ($_SESSION["Login"] != "YES")
header("Location: login.php");

$ID = $_SESSION["Staffid"];
$Table = $_SESSION["Table"];


	     $sql = "DELETE FROM $Table WHERE id = $ID" ;

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
