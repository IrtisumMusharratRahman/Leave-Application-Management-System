<?php
session_start();
require ("config.php");

if ($_SESSION["Login"] != "YES")
header("Location: login.php");

$new_username = $_POST["username"];
$ID = $_POST["id"];
$new_password= $_POST["password"];
$new_Level = $_POST["level"];


$sql = "INSERT INTO user(username, id, password, level) VALUES ('$new_username', '$ID','$new_password','$new_Level')" ;

		 if (mysqli_query($conn, $sql)) {
			echo "<h3>New record created successfully</h3>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

mysqli_close($conn);

		 echo "<p><a href='user_form.php'>Click here to insert again</a></p>";
		 echo "<p> <a href= 'admin_main.php'> Go back to main page</a> </p>";


  ?>
