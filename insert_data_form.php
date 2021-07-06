<?php

require ("config.php");

$sql = "INSERT INTO form (id, name, days, reason)
VALUES ('1234567890', 'Ahmed', 1, 'Hospital');";
$sql .= "INSERT INTO form (id, name, days, reason)
VALUES ('987654321', 'Sara', 2, 'Tired');";
$sql .= "INSERT INTO form (id, name, days, reason)
VALUES ('090909090', 'Tom', 3, 'Travel')";

if (mysqli_multi_query($conn, $sql)) {
  echo "<h3>New records created successfully</h3>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
