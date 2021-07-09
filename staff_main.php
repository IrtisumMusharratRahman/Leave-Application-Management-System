<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Staff Main</title>
  <link rel="stylesheet" href="./css/staff_main1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
  <h1>Main Page for Staffs</h1>
  <a href="update_info_form.php">1. Edit Profile</a> <br /><br />
  <a href="leave_form.php">2. Leave Form</a> <br /><br />
  <a href="result.php">3. View Result</a><br /><br />


  <input type="checkbox" id="check">
  <!--header area start-->
  <header>
    <label for="check">
      <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
      <h3>Main Page <span>Staffs</span></h3>
    </div>
    <div class="right_area">
      <button class="logout_btn" onclick="window.location.href='logout.php';"> Logout </button>

    </div>
  </header>
  <!--sidebar start-->
  <div class="sidebar">
    <center>
      <img class="profile_image" alt="">
      <h4>Chad</h4>
    </center>
    <a href="update_info_form.php"><i class="fas fa-user"></i><span>Edit Profile</span></a>
    <a href="leave_form.php"><i class="fa fa-th"></i><span>Leave Form</span></a>
    <a href="result.php"><i class="fas fa-eye"></i><span>View Result</span></a>
    <a href="#"><i class="fas fa-list"></i><span>Work List</span></a>
    <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
    <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
  </div>
  <!--sidebar end-->


  <div class="content"></div>


</body>

</html>