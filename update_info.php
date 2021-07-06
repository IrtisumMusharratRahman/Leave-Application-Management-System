<?php
session_start();
require ("config.php");

if ($_SESSION["Login"] != "YES")
header("Location: login.php");

$ID = $_GET["id"]?? "";

$username = $_POST["username"];


	     $sql = "UPDATE user SET username='$username' WHERE id=2";

	     if (mysqli_query($conn, $sql)) {
			echo "<h3>Record updated successfully</h3>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
          mysqli_close($conn);

			echo "<p><a href='view_info.php'>Click here to update another user's information</a></p>";
		  echo "<p> <a href= 'admin_main.php'> Go back to main page</a> </p>"


  ?>
