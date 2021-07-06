<?php

require ("config.php");


$sql = "INSERT INTO user (username, id, password, level)
VALUES ('Annie', '090909090', 'admin1', 1);";
$sql .= "INSERT INTO user (username, id, password, level)
VALUES ('Bobby', '123456789', 'manager1', 2);";
$sql .= "INSERT INTO user (username, id, password, level)
VALUES ('Chad', '43215678','staff1', 3);";

$sql .= "INSERT INTO user (username, id, password, level)
VALUES ('Adam', '090909091', 'admin2', 1);";
$sql .= "INSERT INTO user (username, id, password, level)
VALUES ('Beth', '987654321', 'manager2', 2);";
$sql .= "INSERT INTO user (username, id, password, level)
VALUES ('Cindy', '98761234','staff2', 3);";




if (mysqli_multi_query($conn, $sql)) {
  echo "<h3>New records created successfully</h3>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
