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
<<<<<<< HEAD

			echo "<p><a href='view_info.php'>Click here to update another user's information</a></p>";
		    echo "<p> <a href= 'admin_main.php'> Go back to main page</a> </p>"


=======
	
>>>>>>> 983a8a98a790b748d157e60df10c2f360eae452a
  ?>
