<!DOCTYPE html>
<html>
<head>
<title>Select Property to Update</title>
</head>
<style type="text/css">
body { background-image:url('sm.jpg');background-repeat:no-repeat;
background-position:left top;
color:black; margin:50px; word-spacing:3px;font-size:medium;
   font-family: Verdana, Arial, sans-serif; }
th {color:white ; background-color: #336600;text-align:center;}
h2{color:#336600;text-align:center;}
b{color:#477519;}
#wrapper { margin-left: auto;margin-right: auto;
        width: 75%;   background-color:#FFFFB8;
        min-width: 700px;
	 box-shadow: 5px 5px 5px #828282;}
a{color:#477519;}
</style>
</head>
<body>
<div id="wrapper">
&nbsp;
<h2>Fill to update:</h2>
<form action="update_employees.php" method="post">
<?php $db = mysql_connect("pluto","dbproject3", "Guph0eig") or die("The site database appears to be down.");
mysql_select_db("dbproject3");

$emp_id  =$_POST['Emp_id'];

$query= "select * from Employees where emp_id  = '$Emp_id';";

$result=mysql_query($query);
$myrow = mysql_fetch_row($result);

printf("&nbsp;<b>Emp_id:</b> <input type=\"text\" name=\"Emp_id\" value=\"%s\"/><br><br>\n",$myrow[0]);
printf("&nbsp;<b>SSN:</b> <input type=\"text\" name=\"SSN\" value=\"%s\"/><br><br>",$myrow[1]);
printf("&nbsp;<b>Employee First Name :</b> <input type=\"text\" name=\"Emp_fname\" value=\"%s\"/><br><br>\n",$myrow[2]);
printf("&nbsp;<b>Employee Last Name:</b> <input type=\"text\" name=\"Emp_lname\" value=\"%s\"/><br><br>\n",$myrow[3]);
printf("&nbsp;<b>Employee Address:</b> <input type=\"text\" name=\"emp_address\" value=\"%s\"/><br><br>\n",$myrow[4]);
printf("&nbsp;<b>emp_Tele_no:</b> <input type=\"text\" name=\"emp_Tele_no\" value=\"%s\"/><br><br>\n",$myrow[5]);
printf("&nbsp;<b>Job Title:</b> <input type=\"text\" name=\"Job_Title\" value=\"%s\"/><br><br>\n",$myrow[6]);
printf("&nbsp;<b>Gender:</b> <input type=\"text\" name=\"Gender\" value=\"%s\"/><br><br>\n",$myrow[7]);
printf("&nbsp;<b>Hire Date:</b> <input type=\"text\" name=\"Hire_Date\" value=\"%s\"/><br><br>\n",$myrow[8]);
printf("&nbsp;<b>Supervisor Id:</b> <input type=\"text\" name=\"Supervisor_id\" value=\"%s\"/><br><br>\n",$myrow[9]);
printf("&nbsp;<b>Office Id:</b> <input type=\"text\" name=\"Office_id\" value=\"%s\"/><br><br>\n",$myrow[10]);
?>
<br/>
<input type="Submit" value= "Update"/> &nbsp;&nbsp;<input type="Reset"/><br><br>
</form>
</div><br><br>
<a href="http://3.bp.blogspot.com/-sI2VxCnWRO4/UGW-VHrt5JI/AAAAAAAAAA4/XxFZU5ateRM/s1600/real-estate-business.jpg">Image Attribution</a>
</body>
</html>