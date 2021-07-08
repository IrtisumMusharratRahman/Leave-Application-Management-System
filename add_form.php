<?php
session_start();

if ($_SESSION["Login"] != "YES")
header("Location: login.php");

if ($_SESSION["LEVEL"] == 3) {


	     $name = $_POST["name"];
	     $id = $_SESSION["id"];
	     $days = $_POST["days"];
       $reason = $_POST["reason"];
	   //$status = "New Application";


		 require ("config.php");

	     $sql = "INSERT INTO form(id, name, days, reason) VALUES ('$id','$name','$days', '$reason')" ;

		 if (mysqli_query($conn, $sql)) {
			echo "<h3>New record created successfully</h3>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}


	     mysqli_close($conn);
		 echo "<p> <a href= 'staff_main.php'> Go back to main page</a> </p>";
}
?>