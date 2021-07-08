<?php
session_start();
require ("config.php");
?>

<html>
<head>
<title>Leave Application</title>


<script type="text/javascript">
        function GetDays(){
                var dropdt = new Date(document.getElementById("end").value);
                var pickdt = new Date(document.getElementById("start").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }

        function cal(){
        if(document.getElementById("end")){
            document.getElementById("numdays2").value=GetDays();
        }  
    }

    </script>



</head>

<body>

 <form name="form" action="add_form.php"  method="post">


<h2> Application Form </h2>

<table>
	
    <tr>
    	<td> Staff Username : </td>
        <td> <?php  echo $_SESSION["USER"]   ?> </td>
    </tr>


	<tr>
    	<td> Staff ID      : </td>
        <td>  <?php  echo $_SESSION["id"]   ?> </td>
    </tr>

    <tr>
    	<td> Staff Full Name : </td>
        <td> <input type="text" name="name" size="30"/> </td>
    </tr>


    <tr>
    	<td> Start Date: </td>
        <td> 
        <input type="date" class="textbox" id="start" name="start_date" onchange="cal()"/>
         </td>
    </tr>

    <tr>
    	<td> End Date: </td>
        <td> 
        <input type="date" class="textbox" id="end" name="end_date" onchange="cal()"/>
         </td>
    </tr>


    <tr>
            <td> Number of days: </td>
            <td> 
            <input type="text" class="textbox" id="numdays2" name="numdays"/>
            </td>
    </tr>


    <tr>
    	<td> Reason: </td>
        <td>  <textarea name="reason" rows="8" cols="80"></textarea> </td>
    </tr>
    <tr>
  		<td></td><td align="left"><BR><input type="submit" name="button1" value="Submit"></td>
  	</tr>

</table>
</form>

<button onclick="window.location.href='check_login.php';">Previous Page</button>
</body>
</html>
