<?php
session_start();
require ("./Table/config.php");

if ($_SESSION["Login"] != "YES")
header("Location: login.php");

$ID = $_GET["id"]?? "";


	     $sql = "DELETE FROM user WHERE id = $ID" ;

	     if (mysqli_query($conn, $sql)) {
			echo "<script>alert(Record updated successfully)</script>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
          mysqli_close($conn);
	
  ?>
