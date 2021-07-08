<?php

require ("config.php");

$sql = "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('2001', 'Ahmed','2020-03-15','2020-03-16', 2, 'Hospital', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('2002', 'Sara','2020-03-15','2020-03-19', 5, 'Tired', 'New Application');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('2003', 'Tom','2020-03-15','2020-03-17', 3, 'Travel', 'Rejected');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('2004', 'Chom','2020-03-15','2020-03-16', 2, 'Hospital', 'Rejected');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('2005', 'Lio','2020-03-15','2020-03-17', 3, 'Tired', 'New Application');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('2006', 'Afrad','2020-03-15','2020-03-19', 5, 'Travel', 'Approved')";

if (mysqli_multi_query($conn, $sql)) {
  echo "<h3>New records created successfully</h3>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
