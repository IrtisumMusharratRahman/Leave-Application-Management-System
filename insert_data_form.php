<?php

require ("config.php");

$sql = "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1003', 'Bobby','2018-03-15','2018-03-16', 2, 'Hospital', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1003', 'Bobby','2019-03-15','2019-03-19', 5, 'Tired', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1004', 'Beth','2018-07-15','2018-07-17', 3, 'Travel', 'Rejected');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1006', 'Cindy','2018-04-15','2018-04-16', 2, 'Hospital', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1005', 'Chad','2018-05-15','2018-05-17', 3, 'Tired', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1004', 'Beth','2019-01-15','2019-01-16', 2, 'Hospital', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1005', 'Chad','2019-03-15','2019-03-17', 3, 'Travel', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1006', 'Cindy','2019-03-15','2019-03-16', 2, 'Hospital', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1005', 'Chad','2019-06-15','2019-06-17', 3, 'Tired', 'Rejected');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1006', 'Cindy','2019-04-15','2019-04-16', 2, 'Hospital', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1005', 'Chad','2019-07-15','2019-07-17', 3, 'Travel', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1004', 'Beth','2019-02-15','2019-02-16', 2, 'Hospital', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1005', 'Chad','2019-09-15','2019-09-17', 3, 'Tired', 'Rejected');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1006', 'Cindy','2019-06-15','2019-06-16', 2, 'Hospital', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1005', 'Chad','2019-11-15','2019-11-17', 3, 'Travel', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1006', 'Cindy','2019-07-15','2019-07-16', 2, 'Hospital', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1005', 'Chad','2020-01-15','2020-01-17', 3, 'Tired', 'Rejected');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1006', 'Cindy','2020-02-15','2020-02-19', 5, 'Travel', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1004', 'Beth','2021-09-15','2021-09-16', 2, 'Hospital', 'New Application');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1005', 'Chad','2021-09-15','2021-09-17', 3, 'Travel', 'New Application');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, reason, status)
VALUES ('1006', 'Cindy','2021-08-15','2021-08-19', 5, 'Travel', 'New Application')";

if (mysqli_multi_query($conn, $sql)) {
  echo "<h3>New records created successfully</h3>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
