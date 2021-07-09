<?php
session_start();
require("./Table/config.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Leave Application</title>
  <link rel="stylesheet" href="./css/leave_form.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

  <script type="text/javascript">
        function GetDays() {
            var dropdt = new Date(document.getElementById("end").value);
            var pickdt = new Date(document.getElementById("start").value);
            return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }

        function cal() {
            if (document.getElementById("end")) {
                document.getElementById("numdays2").value = GetDays();
            }
        }

        function validateForm(){
            if (document.forms["leave_form"]["name"].value == "") {
				alert("Please Enter Your Full Name!!!");
				return false;
			}
            if (document.forms["leave_form"]["start_date"].value == "") {
				alert("Please Enter Leave Starting Date!!!");
				return false;
			}
            if (document.forms["leave_form"]["end_date"].value == "") {
				alert("Please Enter Leave Ending Date!!!");
				return false;
			}
            if (document.forms["leave_form"]["reason"].value == "") {
				alert("Please Enter Reason For Your Leave!!!");
				return false;
			}
        }
    </script>

</head>

<body>
 
  <input type="checkbox" id="check">
  <!--header area start-->
  <header>
    <label for="check">
      <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
      <h3>Application Page <span>Staffs</span></h3>
    </div>
    <div class="right_area">
      <button class="logout_btn" onclick="window.location.href='logout.php';"> Logout |<img src="./css/images/logout.png" alt="Italian Trulli"> </button>


    </div>
  </header>
  <!--sidebar start-->
  <div class="sidebar">
    <center>
      <img src= "./css/images/user.png" class="profile_image" alt="">
      <h4><?php echo $_SESSION["USER"] ?> </h4>
    </center>
    <a href="update_info_form.php"><i class="fas fa-user"></i><span>Edit Profile</span></a>
    <a href="leave_form.php"><i class="fa fa-th"></i><span>Leave Form</span></a>
    <a href="result.php"><i class="fas fa-eye"></i><span>View Result</span></a>
    <a href="view_search_staff.php" ><i class="fas fa-copy"></i><span>Previous Leaves</span></a>
    <a href="#"><i class="fas fa-list"></i><span>Work List</span></a>
    <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
    <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
  </div>
  <!--sidebar end-->


  <div class="content"></div>


<div class="leaveform">

<form name="leave_form" action="add_form.php" method="post" onsubmit="return validateForm()">


<h2><u> Application Form </u></h2>

<table>

    <tr>
        <td> Staff Username : </td>
        <td> <?php echo $_SESSION["USER"]   ?> </td>
    </tr>


    <tr>
        <td> Staff ID : </td>
        <td> <?php echo $_SESSION["id"]   ?> </td>
    </tr>

    <tr>
        <td> Staff Full Name : </td>
        <td> <input type="text" name="name" size="30" /> </td>
    </tr>


    <tr>
        <td> Start Date: </td>
        <td>
            <input type="date" class="textbox" id="start" name="start_date" onchange="cal()" />
        </td>
    </tr>

    <tr>
        <td> End Date: </td>
        <td>
            <input type="date" class="textbox" id="end" name="end_date" onchange="cal()" />
        </td>
    </tr>


    <tr>
        <td> Number of days: </td>
        <td>
            <input type="text" class="textbox" id="numdays2" name="numdays" />
        </td>
    </tr>


    <tr>
        <td> Reason: </td>
        <td> <textarea name="reason" rows="8" cols="50"></textarea> </td>
    </tr>
    <tr>
        <td></td>
        <td align="center"><BR><input type="submit" class="button1" name="button1" value="Submit"></td>
    </tr>

</table>
</form>

</div>
</body>

</html>



