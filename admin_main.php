
<!Doctype HTML>
<html>
<head>
	<title>Admin Main</title>
	<link rel="stylesheet" href="./css/admin_main.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	
  <div id="mySidenav" class="sidenav">
  <p class="level">Admin</p>
  <a href="admin_main.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="User_form.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Add new user</a>
  <a href="view_info.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Edit/Delete User </a>
  <a href="report.php"class="icon-a"><i class="fa fa-file"></i> &nbsp;&nbsp;Leave Applications Report</a>
  <a href="search_form.php"class="icon-a"><i class="fa fa-search" ></i> &nbsp;&nbsp;Search A Staff</a>
  <a href="#"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Accounts</a>
  <br>
  <br>
  <a href="logout.php"class="icon-a"><i class="fa fa-sign-out"></i> &nbsp;&nbsp;Logout</a>
   </div>
      <div id="main">

	    <div class="head">
		<div class="col-div-6">
			<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
			<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
	</div>
	
	<div class="col-div-6">
	<div class="profile">
		<img src="./css/images/UserPhoto.png" class="pro-img" />
		<p><?php echo $_SESSION["USER"] ?> 
		  <br>
		  <?php echo $_SESSION["id"]   ?> 
		</p> 
	    </div>
    </div>

	<br>
	<br>
	<br>
	<br>

	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
	
	<div class="col-div-3">
		<div class="box">
			<p>67<br/><span>Customers</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>88<br/><span>Projects</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>99<br/><span>Orders</span></p>
			<i class="fa fa-shopping-bag box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>78<br/><span>Tasks</span></p>
			<i class="fa fa-tasks box-icon"></i>
		</div>
	</div>
	<div class="clearfix"></div>
	<br/><br/>
	<div class="col-div-8">
		<div class="box-8">
		<div class="content-box">
			<p>Top Selling Projects <span>Sell All</span></p>
			<br/>
			<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  
  
</table>

</div>
   </div>
	   </div>
	        <div class="col-div-4">
		      <div class="box-4">
		           <div class="content-box">
			           <p>Total Sales <span>Sell All</span></p>
		           </div>
				   <div class="col-div-3">
		            <div class="box">
			           <p>78<br/><span>Projects</span></p>
	                  	</div>
	                </div>
	            </div>
				
		    </div>
       </div>
	</div>

</div>
</body>

</html>
