<?php
session_start();
require('config.php');


$myusername = $_POST["username"];
$mypassword = $_POST["password"];

$sql = "SELECT * FROM user WHERE username='$myusername' and password='$mypassword'";

$result = mysqli_query($conn, $sql);

$rows=mysqli_fetch_assoc($result);

$user_name=$rows["username"];
$ID=$rows["id"];
$password=$rows["password"];
$user_level=$rows["level"];

$count=mysqli_num_rows($result);

if($count==1){

$_SESSION["Login"] = "YES";
$_SESSION["USER"] = $user_name;
$_SESSION["id"] = $ID;
$_SESSION["PASS"] = $password;
$_SESSION["LEVEL"] =$user_level;

echo "<h2>You are now logged in as ".$_SESSION["USER"]." with access level ".$_SESSION["LEVEL"]."</h2>";
if($_SESSION['LEVEL'] == 1) {
    echo "<a href='admin_main.php'>Enter Main Page</a><br/><br/>";
}
elseif($_SESSION['LEVEL'] == 2) {
     echo "<a href='manager_main.php'>Enter Main Page</a><br/><br/>"; ;
}
elseif($_SESSION['LEVEL'] == 3) {
     echo "<a href='staff_main.php'>Enter Main Page</a><br/><br/>"; ;
}
else { echo "Undefined"; }

echo "<a href='index.php'>Back to login page</a>";

} else {

$_SESSION["Login"] = "NO";
header("Location: index.php");
}

mysqli_close($conn);

?>
