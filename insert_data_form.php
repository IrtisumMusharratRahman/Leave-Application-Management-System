<?php

require ("config.php");

$sql = "INSERT INTO form (id, name, days, reason, status)
VALUES ('2001', 'Ahmed', 1, 'Hospital', 'Approved');";
$sql .= "INSERT INTO form (id, name, days, reason, status)
VALUES ('2002', 'Sara', 2, 'Tired', 'New Application');";
$sql .= "INSERT INTO form (id, name, days, reason, status)
VALUES ('2003', 'Tom', 3, 'Travel', 'Rejected');";
$sql .= "INSERT INTO form (id, name, days, reason, status)
VALUES ('2004', 'Chom', 2, 'Hospital', 'Rejected');";
$sql .= "INSERT INTO form (id, name, days, reason, status)
VALUES ('2005', 'Lio', 1, 'Tired', 'New Application');";
$sql .= "INSERT INTO form (id, name, days, reason, status)
VALUES ('2006', 'Afrad', 2, 'Travel', 'Approved')";

if (mysqli_multi_query($conn, $sql)) {
  echo "<h3>New records created successfully</h3>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
